<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 */
get_header();
?>

<?php lsd_get_template_part('strates', 'strate', 'hero_not_home'); ?>
    <div class="padding-strate">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <?php lsd_get_template_part('general', 'bloc', 'ariane'); ?>
                </div>
            </div>
        </div>
    </div>

<?php lsd_get_template_part('strates', 'strate', 'text_defilement'); ?>


<div class="navigation-single-realisation">
    <div class="padding-strate">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-3">
                    <a href="" class="bold">Retour aux réalisations</a>
                </div>
                <div class="col-sm-9 text-right">
                    <ul>
                        <li>
                            <a href="">
                                Enseigne Drapeau
                            </a>
                        </li>
                        <li>
                            <a href="">
                                Enseigne Néon
                            </a>
                        </li>
                        <li>
                            <a href="">
                                Lettres Boitiers
                            </a>
                        </li>
                        <li>
                            <a href="">
                                Lettres Découpées
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="padding-strate strate-list-galerie">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-4">
                <div class="push-image-galerie">
                    <a href="https://images.pexels.com/photos/5417226/pexels-photo-5417226.jpeg" data-lightbox="sets">
                        <img src="https://images.pexels.com/photos/5417226/pexels-photo-5417226.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="">
                    </a>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="push-image-galerie">
                    <a href="https://images.pexels.com/photos/5417226/pexels-photo-5417226.jpeg" data-lightbox="sets">
                        <img src="https://images.pexels.com/photos/5417226/pexels-photo-5417226.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="">
                    </a>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="push-image-galerie">
                    <a href="https://images.pexels.com/photos/5417226/pexels-photo-5417226.jpeg" data-lightbox="sets">
                        <img src="https://images.pexels.com/photos/5417226/pexels-photo-5417226.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="">
                    </a>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="push-image-galerie">
                    <a href="https://images.pexels.com/photos/5417226/pexels-photo-5417226.jpeg" data-lightbox="sets">
                        <img src="https://images.pexels.com/photos/5417226/pexels-photo-5417226.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="">
                    </a>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="push-image-galerie">
                    <a href="https://images.pexels.com/photos/5417226/pexels-photo-5417226.jpeg" data-lightbox="sets">
                        <img src="https://images.pexels.com/photos/5417226/pexels-photo-5417226.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="">
                    </a>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="push-image-galerie">
                    <a href="https://images.pexels.com/photos/5417226/pexels-photo-5417226.jpeg" data-lightbox="sets">
                        <img src="https://images.pexels.com/photos/5417226/pexels-photo-5417226.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="">
                    </a>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="push-image-galerie">
                    <a href="https://images.pexels.com/photos/5417226/pexels-photo-5417226.jpeg" data-lightbox="sets">
                        <img src="https://images.pexels.com/photos/5417226/pexels-photo-5417226.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="">
                    </a>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="push-image-galerie">
                    <a href="https://images.pexels.com/photos/5417226/pexels-photo-5417226.jpeg" data-lightbox="sets">
                        <img src="https://images.pexels.com/photos/5417226/pexels-photo-5417226.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="">
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 text-center">
            <a href="" class="title big link-back-realisations">
                Retour aux réalisations
            </a>
        </div>
    </div>
</div>

<?php lsd_get_template_part('strates', 'strate', 'reassurance'); ?>
<?php get_footer();
