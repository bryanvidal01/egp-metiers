<?php
/*
Template Name: Contenu riche
*/

get_header();

$navigation = [];

$currentPost = get_the_ID();

// Parent post
$parentPost = wp_get_post_parent_id($currentPost);

if($parentPost){
    $navigation[] = $parentPost;
    $currentPost = $parentPost;
}else{
    $navigation[] = $currentPost;
}

// Childs posts
$all_locations = get_pages( array(
    'post_type'         => 'page', //here's my CPT
    'post_status'       => array( 'publish' ) //my custom choice
) );

$inherited_locations = get_page_children( $currentPost, $all_locations );
foreach ($inherited_locations as $inherited_location){
    $navigation[] = $inherited_location->ID;
}


?>

<!--Hero page-->
<?php lsd_get_template_part('strates', 'strate', 'hero_not_home'); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3">
            <ul class="navigation-sub-page">
                <?php if($navigation): ?>
                    <?php foreach ($navigation as $navigationItem): ?>
                        <li <?= (get_the_id() == $navigationItem)? 'class="active"' : ''; ?>>
                            <a href="<?= get_the_permalink($navigationItem); ?>">
                                <?= get_the_title($navigationItem); ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                <?php endif; ?>
            </ul>
        </div>

        <div class="col-sm-9 container-contenu">
            <div class="row">
                <div class="col-sm-12">
                    <?php lsd_get_template_part('general', 'bloc', 'ariane'); ?>
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
