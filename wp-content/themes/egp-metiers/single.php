<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 */

get_header();

$post_work_name_1 = get_field('post_work_name_1');
$post_work_name_2 = get_field('post_work_name_2');
$post_work_name_3 = get_field('post_work_name_3');

$post_work_name_agency = get_field('post_work_name_agency');

$post_work_role = get_field('post_work_role');

$post_work_year = get_field('post_work_year');

$post_work_tools = get_field('post_work_tools');

$post_work_resume = get_field('post_work_resume');

$post_work_url = get_field('post_work_url');

$post_work_image_top_project = get_field('post_work_image_top_project');

if($post_work_image_top_project):
    $post_work_image_top_project_URL = lsd_get_thumb($post_work_image_top_project, 'large');
endif;

?>
    <div id="progress-bar"></div>
    <section class="intro-page case">
        <?php if($post_work_image_top_project_URL): ?>
        <div class="image-case">
            <div class="container-image">
                <div class="container-image-parallax parallax-item" data-gravity="30" data-parent="image-case">
                    <img src="<?= $post_work_image_top_project_URL; ?>" alt="" class="parallax-item" data-gravity="40" data-parent="image-case">
                </div>
            </div>

            <?php if($post_work_url): ?>
            <a href="<?= $post_work_url; ?>" class="button-round d-block" target="_blank">
                <div class="round"></div>
                <div class="text uppercase sans-serif light">
                    View Case
                </div>
            </a>
            <?php endif; ?>
        </div>
        <?php endif; ?>

        <h2 class="title italic serif big">
            <?= ($post_work_name_1) ? $post_work_name_1 : ''; ?>
        </h2>
        <div class="col-sm-10 offset-sm-2 col-12">
            <h2 class="title sans-serif big light text-left world-2 has-border">
                <?= ($post_work_name_2) ? $post_work_name_2 : ''; ?><br/>
                <?= ($post_work_name_3) ? $post_work_name_3 : ''; ?>
            </h2>

            <div class="row list-info-case">
                <?php if ($post_work_name_agency): ?>
                <div class="col-3 col-sm-2">
                    <p class="small light label">
                        Agency
                    </p>

                    <h3>
                        <?= $post_work_name_agency; ?>
                    </h3>
                </div>
                <?php endif; ?>

                <?php if($post_work_role): ?>
                <div class="col-6 col-sm-2">
                    <p class="small light label">
                        Role
                    </p>

                    <h3>
                        <?= $post_work_role; ?>
                    </h3>
                </div>
                <?php endif; ?>

                <?php if($post_work_year): ?>
                <div class="col-3 col-sm-2">
                    <p class="small light label">
                        Year
                    </p>

                    <h3>
                        <?= $post_work_year; ?>
                    </h3>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </section>


    <?php

    if( have_rows('post_work_content') ):

        while ( have_rows('post_work_content') ) : the_row();

            lsd_get_template_part('single', 'strate', get_row_layout());

        endwhile;
    endif; ?>


    <section class="case-resume">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-4">
                    <div class="category sans-serif uppercase small">
                        Tastimonial
                    </div>

                    <div class="resume-text">
                        <?= $post_work_resume; ?>
                    </div>
                </div>
                <div class="col-sm-7 offset-sm-1">
                    <div class="row container-info-resume">
                        <div class="col-sm-6">
                            <div class="row">
                                <?php if($post_work_name_agency): ?>
                                <div class="col-6">
                                    <p class="small light label">
                                        Agency
                                    </p>
                                    <p>
                                        <?= $post_work_name_agency; ?>
                                    </p>
                                </div>
                                <?php endif; ?>

                                <?php if($post_work_role): ?>
                                <div class="col-6">
                                    <p class="small light label">
                                        Role
                                    </p>
                                    <p>
                                        <?= $post_work_role; ?>
                                    </p>
                                </div>
                                <?php endif; ?>

                                <?php if($post_work_year): ?>
                                <div class="col-6">
                                    <p class="small light label">
                                        Year
                                    </p>
                                    <p>
                                        <?= $post_work_year; ?>
                                    </p>
                                </div>
                                <?php endif; ?>

                                <?php if($post_work_tools): ?>
                                <div class="col-6">
                                    <p class="small light label">
                                        Tools
                                    </p>
                                    <p>
                                       <?= $post_work_tools; ?>
                                    </p>
                                </div>
                                <?php endif; ?>

                            </div>
                        </div>
                        <?php if($post_work_url): ?>
                        <div class="col-sm-6 text-right">
                            <a href="<?= $post_work_url; ?>" target="_blank" class="button-round">
                                <div class="round"></div>
                                <div class="text uppercase sans-serif light">
                                    View Case
                                </div>
                            </a>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php

if(get_previous_post()){
    get_footer('single');
}else{
    get_footer();
}
