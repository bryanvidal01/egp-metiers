<?php
/*
Template Name: Archive Galerie
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

<div class="container-galerie">
    <div class="padding-strate">
        <div class="container-fluid">
            <div class="row">

                <?php
                $args = array(
                    'post_type' => 'galerie',
                    'posts_per_page' => -1
                );
                $the_query = new WP_Query( $args );

                if ( $the_query->have_posts() ):
                    while ( $the_query->have_posts() ):
                        $the_query->the_post();
                        $imageID = get_field('post_galerie_thumbnail');
                        $imageURL = '';
                        if($imageID){
                            $imageURL = lsd_get_thumb($imageID, 'pushGalerie');
                        }
                        $description = get_field('post_galerie_description');

                        $allImagesGalerie = get_field('images_galerie');
                        $allImagesGalerieNumber = count($allImagesGalerie);
                    ?>
                        <div class="col-sm-4">
                            <a href="<?= get_the_permalink(); ?>" class="push-galerie-link">
                                <?php if($imageURL): ?>
                                    <img src="<?= $imageURL; ?>" alt="">
                                <?php endif; ?>
                                <h2 class="title"><?= get_the_title(); ?></h2>
                                <?= ($description) ? $description : ''; ?>
                                <p>Galerie contenant <span><?= $allImagesGalerieNumber; ?> réalisations</span></p>

                                <div class="link small-border">
                                    Voir les réalisations
                                </div>
                            </a>
                        </div>
                    <?php endwhile;
                endif;
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </div>
</div>

<?php lsd_get_template_part('strates', 'strate', 'reassurance'); ?>

<?php get_footer(); ?>
