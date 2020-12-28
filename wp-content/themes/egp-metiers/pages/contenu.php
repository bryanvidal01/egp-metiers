<?php
/*
Template Name: Contenu riche
*/

get_header();
?>

<!--Hero page-->
<?php lsd_get_template_part('strates', 'strate', 'hero_not_home'); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3">
            <ul class="navigation-sub-page">
                <li class="active">
                    <a href="">
                        Qui sommes nous
                    </a>
                </li>
                <li>
                    <a href="">
                        Le groupe
                    </a>
                </li>
                <li>
                    <a href="">
                        Nous rencontrer
                    </a>
                </li>
                <li>
                    <a href="">
                        Nos réalisations
                    </a>
                </li>
            </ul>
        </div>

        <div class="col-sm-9 container-contenu">
            <div class="row">
                <div class="col-sm-12">
                    <div class="pagination">
                        <ul>
                            <li>
                                <a href="">Accueil</a>
                            </li>
                            <li class="active">
                                <a href="">Qui sommes nous</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <?php lsd_get_template_part('strates', 'strate', 'text_image'); ?>
            <?php lsd_get_template_part('strates', 'strate', 'realisation_slider'); ?>
            <?php lsd_get_template_part('strates', 'strate', 'text_defilement'); ?>
            <?php lsd_get_template_part('strates', 'strate', 'reassurance'); ?>
            <?php lsd_get_template_part('strates', 'strate', 'two_images_text'); ?>
            <?php lsd_get_template_part('strates', 'strate', 'image_full'); ?>
            <?php lsd_get_template_part('strates', 'strate', 'text_image'); ?>
            <?php lsd_get_template_part('strates', 'strate', 'text_defilement'); ?>

        </div>
    </div>
</div>

<?php
get_footer();
