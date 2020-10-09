<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name') ?></title>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" >
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@500&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body >
<!-- top-nave -->
<div class="top-nav">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="clock text-center">
                    <i class="fa fa-clock"></i>
                    <span><?php echo date("j F Y");?></span>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="map text-center">
                    <i class="fa fa-map-marker-alt"></i>
                    <span>Misrata - Libya</span>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="email text-center">
                    <i class="fa fa-paper-plane"></i>
                    <span>smart@tech.ly</span>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="social-icons text-center">
                    <a href="https://www.facebook.com/MiusrataEl/" target="_blank"><i class="fab fa-facebook-square fa-lg"></i></a>
                    <a href="#"><i class="fab fa-instagram-square fa-lg"></i></a>
                    <a href="#"><i class="fab fa-whatsapp-square fa-lg"></i></a>
                </div>
            </div>
        </div>
    </div>
</div> <!-- top-nav -->

<!-- main navbar -->
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light smart-tech-shadow">
    <a class="navbar-brand" href="<?php bloginfo( 'url' ); ?>">
        <img src="<?php echo get_template_directory_uri().'/images/icons/logo.svg'?>" height="35px"
             style="margin: 0 10px;">
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="container">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <?php st_bootstrap_menu() ?>
    </div>

    </div>
</nav> <!-- main navbar -->