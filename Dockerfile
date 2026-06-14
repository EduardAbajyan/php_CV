FROM php:8.2-apache

# Enable Apache rewrite (important for MVC routing)
RUN a2enmod rewrite

# Set working directory
WORKDIR /var/www/html

# Copy project
COPY . .

# Fix permissions (important on Linux server)
RUN chown -R www-data:www-data /var/www/html

EXPOSE 80
