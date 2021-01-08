<?php
    $content_slider_title_1 = get_sub_field('content_slider_title_1');
    $content_slider_title_2 = get_sub_field('content_slider_title_2');
    $content_slider_label_link = get_sub_field('content_slider_label_link');
    $content_slider_url_link = get_sub_field('content_slider_url_link');
    $content_slider_images = get_sub_field('content_slider_images');
?>
<div class="strate-slider">
    <div class="container-fluid">
        <div class="row padding-strate intro-slide">
            <div class="col-sm-6">
                <?php if($content_slider_title_1): ?>
                <h2 class="title medium">
                    <?= $content_slider_title_1; ?>
                </h2>
                <?php endif; ?>

                <?php if($content_slider_title_2): ?>
                <h3 class="title medium italic">
                    <?= $content_slider_title_2; ?>
                </h3>
                <?php endif; ?>
            </div>

            <?php if($content_slider_url_link && $content_slider_label_link): ?>
            <div class="col-sm-6 text-right">
                <div class="container-link-all">
                    <a href="<?= $content_slider_url_link; ?>" class="link small-border is-vertically-aligned-bottom"><?= $content_slider_label_link; ?></a>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
    <section class="case-carrousel">
        <div class="carousel slider">
            <?php
            foreach ($content_slider_images as $content_slider_image):
                $imageID = $content_slider_image['ID'];
                $imageURL = '';

                if($imageID){
                    $imageURL = lsd_get_thumb($imageID, 'large');
                }
                if(isset($imageURL) && $imageURL):
            ?>
                <div>
                    <img src="<?= $imageURL; ?>" alt="">
                </div>
            <?php
                endif;
            endforeach;
            ?>
        </div>
    </section>
</div>
