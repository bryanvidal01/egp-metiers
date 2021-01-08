<?php
    $content_text_center_title_1 = get_sub_field('content_text_center_title_1');
    $content_text_center_title_2 = get_sub_field('content_text_center_title_2');
    $content_text_center_text = get_sub_field('content_text_center_text');
    $content_text_center_label_link_1 = get_sub_field('content_text_center_label_link_1');
    $content_text_center_url_link_1 = get_sub_field('content_text_center_url_link_1');
    $content_text_center_label_link_2 = get_sub_field('content_text_center_label_link_2');
    $content_text_center_url_link_2 = get_sub_field('content_text_center_url_link_2');

?>
<!--Texte centré-->
<div class="strate-text-center">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 mx-auto text-center">
                <?php if($content_text_center_title_1): ?>
                <h2 class="title medium">
                    <?= $content_text_center_title_1; ?>
                </h2>
                <?php endif; ?>

                <?php if($content_text_center_title_2): ?>
                <h3 class="title medium italic">
                    <?= $content_text_center_title_2; ?>
                </h3>
                <?php endif; ?>

                <?= ($content_text_center_text) ? $content_text_center_text : ''; ?>

                <ul class="multiple-links">
                    <?php if($content_text_center_label_link_1 && $content_text_center_url_link_1): ?>
                    <li>
                        <a href="<?= $content_text_center_url_link_1; ?>" class="link small-border"><?= $content_text_center_label_link_1; ?></a>
                    </li>
                    <?php endif; ?>
                    <?php if($content_text_center_label_link_2 && $content_text_center_url_link_2): ?>
                    <li>
                        <a href="<?= $content_text_center_label_link_2; ?>" class="link small-border"><?= $content_text_center_label_link_2; ?></a>
                    </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </div>
</div>
