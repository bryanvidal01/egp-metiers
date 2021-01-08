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
    'post_type'         => 'page',
    'post_status'       => array( 'publish' )
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


            <?php if( have_rows('content') ):
                while ( have_rows('content') ) : the_row();
                    if( get_row_layout() == 'content_title_text_image' ):

                        lsd_get_template_part('strates', 'strate', 'text_image');

                    elseif( get_row_layout() == 'content_slider' ):

                        lsd_get_template_part('strates', 'strate', 'realisation_slider');

                    elseif( get_row_layout() == 'content_title_text_text_bg' ):

                        lsd_get_template_part('strates', 'strate', 'text_defilement');

                    elseif( get_row_layout() == 'content_reassurance' ):
                        lsd_get_template_part('strates', 'strate', 'reassurance');

                    elseif( get_row_layout() == 'content_two_images_text' ):
                        lsd_get_template_part('strates', 'strate', 'two_images_text');

                    elseif( get_row_layout() == 'content_image_full' ):
                        lsd_get_template_part('strates', 'strate', 'image_full');

                    elseif( get_row_layout() == 'content_iframe' ):
                        lsd_get_template_part('strates', 'strate', 'iframe');

                    endif;
                endwhile;
            else :

            endif; ?>

        </div>
    </div>
</div>

<?php
get_footer();
