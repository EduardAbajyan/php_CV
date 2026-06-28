<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script type="module" src="<?php echo base_url('asset/js/ViewportVars.js') ?>"></script>
    <script type="module" src="<?php echo base_url('asset/js/color-mode.js') ?>"></script>
    <link rel="stylesheet" href="<?php echo asset('css/pages/shared.css') ?>" />
    <link rel="stylesheet" href="<?php echo asset('css/pages/page2.css') ?>" />
    <link rel="icon" type="image/x-icon" href="<?php echo base_url('favicon.ico') ?>" />
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
        crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Bonheur+Royale&family=Wendy+One&display=swap"
        rel="stylesheet" />
    <?php render_page_metadata([
        'title' => 'Portfolio Contents | Eduard Abajyan',
        'description' => 'Browse Eduard Abajyan\'s CV sections, including about, education, skills, project work, and contact information.',
        'path' => 'page2',
    ]); ?>
</head>

<body>
    <div class="container-fluid page2">
        <div class="row">
            <div class="col-6" id="contentHeader">
                <h1>List of content</h1>
            </div>
            <div class="col-6 contrasting" id="theList">
                <ul>
                    <li><a href="<?php echo base_url('page1'); ?>"> Home </a></li>
                    <li><a href="<?php echo base_url('page3'); ?>">About</a></li>
                    <li><a href="<?php echo base_url('page4'); ?>">Education</a></li>
                    <li><a href="<?php echo base_url('page5'); ?>">Skills</a></li>
                    <li><a href="<?php echo base_url('page6'); ?>">Portfolio app</a></li>
                    <li><a href="<?php echo base_url('page7'); ?>">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
    <script type="module" src="<?php echo base_url('asset/js/pageListings.js') ?>"></script>
</body>

</html>