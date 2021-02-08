
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri();?>/assets/images/icon.png" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">

    <script  src='<?php echo get_template_directory_uri();?>/assets/js/jquery.js'></script>
    <script  src='<?php echo get_template_directory_uri();?>/assets/js/lightbox-plus-jquery.min.js'></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/slick.js"></script>

    <?php wp_head(); ?>

    <?php $colorTheme = get_field('params_color_theme', 'option'); ?>

    <style>
        .info-bulle{
            background: <?php echo $colorTheme; ?>
        }
        .info-bulle:before{
            border-bottom: 15px solid <?php echo $colorTheme; ?>;
        }
    </style>
</head>

<body <?php body_class(); ?>>

<?php
    $logoWhite = get_field('params_logo_white', 'option');

    if($logoWhite){
        $logoWhiteUrl = lsd_get_thumb($logoWhite, 'full');
    }
    $logoDark = get_field('params_logo_dark', 'option');

    if($logoDark){
        $logoDarkUrl = lsd_get_thumb($logoDark, 'full');
    }
?>
<header>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 col-6">
                <a href="<?php echo get_site_url(); ?>" class="header-logo">
                    <?php if(isset($logoWhiteUrl) && $logoWhiteUrl): ?>
                    <img src="<?= $logoWhiteUrl; ?>" class="logo white" alt="Logo blanc <?php get_bloginfo( 'name' ); ?>">
                    <?php endif; ?>
                    <?php if(isset($logoDarkUrl) && $logoDarkUrl): ?>
                    <img src="<?= $logoDarkUrl; ?>" class="logo dark" alt="Logo foncé <?php get_bloginfo( 'name' ); ?>">
                    <?php endif; ?>
                </a>
            </div>

            <div class="col-sm-6 col-6 text-right">
                <button class="navigation">
                    <div class="bar"></div>
                    <div class="bar"></div>
                    <div class="bar"></div>
                    <div class="bar"></div>
                    <div class="bar"></div>
                    <div class="bar"></div>
                    <div class="bar"></div>
                    <div class="bar"></div>
                    <div class="bar"></div>
                </button>
            </div>
        </div>
    </div>

    <div class="navigation-container">
        <div class="align-container-menu">
            <div class="content-menu">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12 text-center list-menus">
                            <?= wp_nav_menu(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="info-left">
            <?php lsd_get_template_part('general', 'bloc', 'social'); ?>
        </div>
    </div>
</header>
