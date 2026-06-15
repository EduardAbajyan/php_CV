FROM php:8.2-apache

RUN a2enmod rewrite

WORKDIR /var/www/html

COPY . .

# Change Apache DocumentRoot to /public
ENV APACHE_DOCUMENT_ROOT=/var/www/html/public

RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' \
    /etc/apache2/sites-available/*.conf \
    /etc/apache2/apache2.conf \
    /etc/apache2/conf-available/*.conf

# Allow .htaccess in public/
RUN printf '%s\n' \
    '<Directory /var/www/html/public>' \
    '    AllowOverride All' \
    '    Require all granted' \
    '</Directory>' \
    > /etc/apache2/conf-available/mvc-rewrite.conf \
    && a2enconf mvc-rewrite

RUN chown -R www-data:www-data /var/www/html

RUN docker-php-ext-install pdo pdo_mysql

EXPOSE 80