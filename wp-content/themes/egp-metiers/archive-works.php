<?php
/*
Template Name: Project
*/

get_header();
?>
<div id="progress-bar"></div>
<section class="intro-page case archive-case">
    <div class="image-case">
        <div class="container-image">
            <div class="container-image-parallax parallax-item" data-gravity="30">
                <img src="https://images.pexels.com/photos/2618784/pexels-photo-2618784.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="" class="parallax-item" data-gravity="40">
            </div>
        </div>
    </div>
    <h2 class="title italic serif big">
        Cases
    </h2>
    <div class="col-sm-10 offset-sm-2 col-12">
        <h2 class="title sans-serif big light text-left world-2">
            Studies
        </h2>
    </div>
</section>

<section class="list-case">
    <div class="container-fluid">
        <?php

        if ( have_posts() ) :

            while ( have_posts() ) :
                the_post();
                $post_work_name_1 = get_field('post_work_name_1', $page_home_works_article);
                $post_work_name_2 = get_field('post_work_name_2', $page_home_works_article);
                $post_work_name_3 = get_field('post_work_name_3', $page_home_works_article);

                $post_work_role = get_field('post_work_role');

                $post_work_year = get_field('post_work_year');

                $post_work_image_hover = get_field('post_work_image_hover');

                if($post_work_image_hover){
                    $post_work_image_hover_url = lsd_get_thumb($post_work_image_hover, 'large');
                }
        ?>
            <a href="<?= get_the_permalink(); ?>" class="image-follow">
                <div class="row">
                    <?php if(isset($post_work_image_hover_url) && $post_work_image_hover_url): ?>
                    <img src="<?= $post_work_image_hover_url; ?>" width="250" class="follow-image" alt="">
                    <?php endif; ?>
                    <div class="col-sm-9">
                        <div class="title medium serif">
                            <?= $post_work_name_1; ?>
                            <span class="title medium serif italic">
                               <?= $post_work_name_2; ?>
                            </span>
                            <span class="title medium serif">
                               <?= $post_work_name_3; ?>
                            </span>
                        </div>
                    </div>

                    <div class="col-sm-3 info-project-cases">
                        <div class="row">
                            <?php if($post_work_role): ?>
                            <div class="col-sm-8">
                                <div class="small light label">
                                    Role
                                </div>
                                <div class="">
                                    <?= $post_work_role; ?>
                                </div>
                            </div>
                            <?php endif; ?>
                            <?php if($post_work_year): ?>
                            <div class="col-sm-4">
                                <div class="small light label">Year</div>
                                <div class="">
                                    <?= $post_work_year; ?>
                                </div>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </a>

        <?php
            endwhile;

        endif;
        ?>
    </div>
</section>


<?php get_footer(); ?>
