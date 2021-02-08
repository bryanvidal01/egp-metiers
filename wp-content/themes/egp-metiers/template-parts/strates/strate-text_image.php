<?php
$content_title_text_image_title_1 = get_sub_field('content_title_text_image_title_1');
$content_title_text_image_title_2 = get_sub_field('content_title_text_image_title_2');
$content_title_text_image_text = get_sub_field('content_title_text_image_text');
$content_title_text_image_image = get_sub_field('content_title_text_image_image');
$content_title_text_image_image_url = '';

if($content_title_text_image_image){
    $content_title_text_image_image_url = lsd_get_thumb($content_title_text_image_image, 'large');
}
$content_title_text_image_label_link = get_sub_field('content_title_text_image_label_link');
$content_title_text_image_url_link = get_sub_field('content_title_text_image_url_link');

$content_title_text_image_position = get_sub_field('content_title_text_image_position');
?>
<div class="strate-background-grey <?= ($content_title_text_image_position) ? 'image-left': ''; ?>">
    <div class="container-fluid">
        <div class="row">
            <?php if(isset($content_title_text_image_image_url) && $content_title_text_image_image_url && $content_title_text_image_position): ?>
                <div class="container-image">
                    <img src="<?= $content_title_text_image_image_url; ?>" alt="<?= $content_title_text_image_title_1; ?> <?= $content_title_text_image_title_2; ?>">
                </div>
            <?php endif; ?>
            <div class="col-sm-6 <?= ($content_title_text_image_position) ? 'offset-6': ''; ?>">
                <div class="container-text-strate">
                    <?php if($content_title_text_image_title_1): ?>
                    <h2 class="title medium">
                        <?= $content_title_text_image_title_1; ?>
                    </h2>
                    <?php endif; ?>
                    <?php if($content_title_text_image_title_2): ?>
                    <h3 class="title medium italic">
                        <?= $content_title_text_image_title_2; ?>
                    </h3>
                    <?php endif; ?>

                    <?= ($content_title_text_image_text) ? $content_title_text_image_text : ''; ?>

                    <?php if($content_title_text_image_url_link && $content_title_text_image_label_link): ?>
                        <a href="<?= $content_title_text_image_url_link; ?>" class="link small-border"><?= $content_title_text_image_label_link; ?></a>
                    <?php endif; ?>
                </div>
            </div>
            <?php if(isset($content_title_text_image_image_url) && $content_title_text_image_image_url && !$content_title_text_image_position): ?>
            <div class="container-image">
                <img src="<?= $content_title_text_image_image_url; ?>" alt="<?= $content_title_text_image_title_1; ?> <?= $content_title_text_image_title_2; ?>">
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>
