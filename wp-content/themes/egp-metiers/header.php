
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
    <script  src='<?php echo get_template_directory_uri();?>/assets/js/app.js'></script>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


<header>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 col-6">
                <a href="<?php echo get_site_url(); ?>" class="header-logo">
                    <?php lsd_get_template_part('icons','header', 'logo'); ?>
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
            <ul class="social-menu-icons">
                <li>
                    <a href="">
                        <?php lsd_get_template_part('icons','icon', 'facebook'); ?>
                    </a>
                </li>
                <li>
                    <a href="">
                        <?php lsd_get_template_part('icons','icon', 'instagram'); ?>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</header>
