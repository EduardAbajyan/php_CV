<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="data:;" />
    <script type="module" src="<?php echo base_url('asset/js/ViewportVars.js') ?>"></script>
    <script type="module" src="<?php echo base_url('asset/js/color-mode.js') ?>"></script>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
        crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Akaya+Telivigala&family=Cagliostro&family=Corinthia:wght@400;700&family=Niconne&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo base_url('asset/css/styles.css') ?>" />
    <title>About Me</title>
</head>

<body>
    <div class="container-fluid page3">
        <div class="row">
            <div
                class="contrasting col-12 col-md-4 col-lg-6"
                id="introductionAboutMe">
                <p id="introductionAboutMeWord">introducing</p>
                <h1>About Me</h1>
                <p>
                    Hello! I'm Eduard, a passionate full-stack web developer dedicated
                    to bringing your digital vision to life. With expertise in creating
                    seamless, user-friendly experiences, I'm here to transform your
                    ideas into reality. Let's collaborate and build something
                    extraordinary together!
                </p>
            </div>
            <div class="col-12 col-md-8 col-lg-6" id="imageAboutMe">
                <div class="frame">
                    <img class="aboutme-needs-size" src="<?php echo base_url('asset/images/aboutMeImage.jpg') ?>" alt="About Me Image" />
                    <div>
                        <p class="name">Eduard Abajyan</p>
                        <p class="profession">full-stack web developer</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="module" src="<?php echo base_url('asset/js/resizeAboutMeImg.js') ?>"></script>
    <script type="module" src="<?php echo base_url('asset/js/pageListings.js') ?>"></script>
    <script type="module" src="<?php echo base_url('asset/js/pageListingButtons.js') ?>"></script>

</body>

</html>