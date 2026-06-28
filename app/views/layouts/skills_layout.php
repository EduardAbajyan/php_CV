<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/x-icon" href="<?php echo base_url('favicon.ico') ?>" />
    <script type="module" src="<?php echo base_url('asset/js/color-mode.js') ?>"></script>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
        crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Bonheur+Royale&family=Cagliostro&family=Wendy+One&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo base_url('asset/css/styles.css') ?>" />
    <?php render_page_metadata([
        'title' => 'Skills | Eduard Abajyan',
        'description' => 'Technical skills across PHP, JavaScript, TypeScript, SQL, Docker, and modern full-stack web development.',
        'path' => 'page5',
    ]); ?>
    <script>
        (function() {
            var ua = navigator.userAgent;
            var isSafari = /^((?!chrome|android).)*safari/i.test(ua);
            if (!isSafari) {
                return;
            }

            document.addEventListener('DOMContentLoaded', function() {
                document.querySelectorAll('img[loading="lazy"]').forEach(function(img) {
                    img.loading = 'eager';
                });
            });
        })();
    </script>
</head>

<body>
    <div class="container-fluid page5">
        <div class="row">
            <div class="col-12 col-md-4 col-lg-3" id="skillsHeader">
                <h2>Skills</h2>
            </div>
            <?php echo $content ?? ''; ?>
        </div>
    </div>
    <script type="module" src="<?php echo base_url('asset/js/pageListings.js') ?>"></script>
    <script type="module" src="<?php echo base_url('asset/js/pageListingsNoScrolling.js') ?>"></script>
    <script type="module" src="<?php echo base_url('asset/js/skillsPage.js') ?>"></script>
    <script type="module" src="<?php echo base_url('asset/js/pageListingButtons.js') ?>"></script>
</body>

</html>