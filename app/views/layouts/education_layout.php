<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script type="module" src="<?php echo base_url('asset/js/color-mode.js') ?>"></script>
    <link rel="icon" type="image/x-icon" href="<?php echo base_url('favicon.ico') ?>" />
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
        crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Cagliostro&family=Wendy+One&family=Emilys+Candy&family=Nanum+Myeongjo&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo base_url('asset/css/styles.css') ?>" />
    <?php render_page_metadata([
        'title' => 'Education | Eduard Abajyan',
        'description' => 'Education, certifications, and continuous learning highlights from Eduard Abajyan\'s full-stack developer CV.',
        'path' => 'page4',
        'image' => asset('images/YSU.jpg'),
    ]); ?>
</head>

<body>
    <div class="container-fluid page4">
        <div class="row">
            <div class="contrasting col-12 col-md-5" id="educationHeader">
                <h1>Education</h1>
                <div id="imageContainer" data-info="<?php echo base_url('asset/images'); ?>">
                    <a href="https://www.ysu.am/en" target="_blank">
                        <img src="<?php echo base_url('asset/images/YSU.jpg') ?>" alt="YSU facade" loading="lazy" decoding="async" />
                    </a>
                </div>
            </div>
            <div class="contrasting col-12 col-md-2" id="middle"></div>
            <div class="col-12 col-md-5" id="educationList">
                <?php echo $content ?? ''; ?>
            </div>
        </div>
    </div>
    <script type="module" src="<?php echo base_url('asset/js/pageListings.js') ?>"></script>
    <script type="module" src="<?php echo base_url('asset/js/pageListingsNoScrolling.js') ?>"></script>
    <script type="module" src="<?php echo base_url('asset/js/educationPage.js') ?>"></script>
    <script type="module" src="<?php echo base_url('asset/js/pageListingButtons.js') ?>"></script>
</body>

</html>