<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 */
get_header();

$galerieImages = get_field('images_galerie');
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
                    <a href="<?= get_the_permalink(PAGE_GALERIE); ?>" class="bold">Retour aux réalisations</a>
                </div>

                <div class="col-sm-9 text-right">
                    <ul>
                        <?php
                        $args = array(
                            'post_type' => 'galerie',
                            'posts_per_page' => -1,
                            'post__not_in' => array(get_the_ID())
                        );
                        $the_query = new WP_Query( $args );

                        if ( $the_query->have_posts() ):
                            while ( $the_query->have_posts() ):
                                $the_query->the_post();
                                ?>
                                <li>
                                    <a href="<?= get_the_permalink(); ?>">
                                        <?= get_the_title(); ?>
                                    </a>
                                </li>
                            <?php endwhile;
                        endif;
                        wp_reset_postdata();
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="padding-strate strate-list-galerie">
    <div class="container-fluid">
        <div class="row">

            <?php
            $image = 1;
            foreach ($galerieImages as $galerieImage):
                $galerieImageID = $galerieImage['ID'];
                $galerieImageURL = '';
                if($galerieImageID){
                    $galerieImageURL = lsd_get_thumb($galerieImageID, 'pushGalerieSingle');
                    $galerieImageURLLarge = lsd_get_thumb($galerieImageID, 'large');
                }

                if($galerieImageURL):
            ?>
                <div class="col-sm-4">
                    <div class="push-image-galerie">
                        <a href="<?= $galerieImageURLLarge; ?>" data-lightbox="sets">
                            <img src="<?= $galerieImageURL; ?>" alt="<?= get_the_title(); ?> image <?php echo $image;?>">
                        </a>
                    </div>
                </div>
            <?php endif; $image++; endforeach; ?>

        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 text-center">
            <a href="<?= get_the_permalink(PAGE_GALERIE); ?>" class="title big link-back-realisations">
                Retour aux réalisations
            </a>
        </div>
    </div>
</div>

<?php lsd_get_template_part('strates', 'strate', 'reassurance'); ?>
<?php get_footer();
