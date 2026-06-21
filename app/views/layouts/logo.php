<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script type="module" src="<?php echo base_url('asset/js/logoHeader.js') ?>"></script>
    <script type="module" src="<?php echo base_url('asset/js/color-mode.js') ?>"></script>
    <link rel="stylesheet" href="<?php echo base_url('asset/css/styles.css') ?>" />
    <link rel="icon" href="data:;" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Bonheur+Royale&family=Wendy+One&display=swap"
        rel="stylesheet" />
    <title>Logo page</title>
</head>

<body>
    <div class="logo">
        <div class="contrasting circle" id="circlePage1"></div>
        <div class="author">by Eduard Abajyan</div>
        <div class="portfolioWord1">PORTFOLIO</div>
        <div class="portfolioWord2">PORTFOLIO</div>
        <div class="projectWord">project</div>
    </div>
    <?php echo $content ?? ''; ?>
    <script type="module" src="<?php echo base_url('asset/js/pageListings.js') ?>"></script>
    <script type="module" src="<?php echo base_url('asset/js/logoDeleteHints.js') ?>"></script>
    <script type="module" src="<?php echo base_url('asset/js/pageListingButtons.js') ?>"></script>
</body>

</html>