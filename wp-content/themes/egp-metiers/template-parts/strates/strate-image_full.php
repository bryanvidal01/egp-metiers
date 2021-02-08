<?php
    $content_image_full_image_full = get_sub_field('content_image_full_image_full');
    $content_image_full_image_full_url = '';

    if($content_image_full_image_full){
        $content_image_full_image_full_url = lsd_get_thumb($content_image_full_image_full, 'full');
    }
?>

<div class="strate-image-full">
    <img src="<?= $content_image_full_image_full_url; ?>" alt="<?php get_bloginfo( 'name' ); ?> <?= get_the_title(); ?>">
</div>
