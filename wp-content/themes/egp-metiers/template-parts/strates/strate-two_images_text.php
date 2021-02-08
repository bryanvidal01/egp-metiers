<?php
$content_two_images_text_image_1 = get_sub_field('content_two_images_text_image_1');
$content_two_images_text_image_1_url = '';

if($content_two_images_text_image_1){
    $content_two_images_text_image_1_url = lsd_get_thumb($content_two_images_text_image_1, 'large');
}

$content_two_images_text_image_2 = get_sub_field('content_two_images_text_image_2');
$content_two_images_text_image_2_url = '';
if($content_two_images_text_image_2){
    $content_two_images_text_image_2_url = lsd_get_thumb($content_two_images_text_image_2, 'large');
}

$content_two_images_text_title_1 = get_sub_field('content_two_images_text_title_1');
$content_two_images_text_title_2 = get_sub_field('content_two_images_text_title_2');
$content_two_images_text_text    = get_sub_field('content_two_images_text_text');
$content_two_images_text_label_link = get_sub_field('content_two_images_text_label_link');
$content_two_images_text_url_link = get_sub_field('content_two_images_text_url_link');
?>
<div class="strate-two-image-text">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <?php if(isset($content_two_images_text_image_1_url) && $content_two_images_text_image_1_url): ?>
                <img src="<?= $content_two_images_text_image_1_url; ?>" class="image-1" width="95%" alt="<?= $content_two_images_text_title_1; ?> <?= $content_two_images_text_title_2 ?> <?= get_the_title(); ?>">
                <?php endif; ?>
            </div>
            <div class="col-sm-6">
                <?php if($content_two_images_text_title_1): ?>
                <h2 class="title medium">
                    <?= $content_two_images_text_title_1; ?>
                </h2>
                <?php endif; ?>

                <?php if($content_two_images_text_title_2): ?>
                <h3 class="title medium italic">
                    <?= $content_two_images_text_title_2 ?>
                </h3>
                <?php endif; ?>

                <?= ($content_two_images_text_text)? $content_two_images_text_text : ''; ?>

                <?php if($content_two_images_text_label_link && $content_two_images_text_url_link): ?>
                <a href="<?= $content_two_images_text_url_link; ?>" class="link small-border">
                    <?= $content_two_images_text_label_link; ?>
                </a>
                <?php endif; ?>

                <?php if(isset($content_two_images_text_image_2_url) && $content_two_images_text_image_2_url): ?>
                <div class="container-image">
                    <img src="<?= $content_two_images_text_image_2_url ?>" class="image-2" width="80%" alt="<?= $content_two_images_text_title_1; ?> <?= $content_two_images_text_title_2 ?> <?= get_the_title(); ?>">
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
