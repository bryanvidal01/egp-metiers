<?php
    $strate_title_text_text_bg_text_bg = get_custom_field('strate_title_text_text_bg_text_bg');
    $strate_title_text_text_bg_title_1 = get_custom_field('strate_title_text_text_bg_title_1');
    $strate_title_text_text_bg_title_2 = get_custom_field('strate_title_text_text_bg_title_2');
    $strate_title_text_text_bg_text    = get_custom_field('strate_title_text_text_bg_text');
    $strate_title_text_text_bg_label_link = get_custom_field('strate_title_text_text_bg_label_link');
    $strate_title_text_text_bg_url_link = get_custom_field('strate_title_text_text_bg_url_link');
?>

<div class="strate-text-defilement">
    <?php if($strate_title_text_text_bg_text_bg): ?>
    <div class="text-defilement">
        <div class="text-content"><?= $strate_title_text_text_bg_text_bg; ?></div>
    </div>
    <?php endif; ?>

    <div class="container-fluid <?= ($strate_title_text_text_bg_text_bg)? 'container-text-strate':''; ?>">
        <div class="row">
            <div class="col-sm-10 mx-auto">
                <?php if($strate_title_text_text_bg_title_1): ?>
                <h2 class="title medium">
                    <?= $strate_title_text_text_bg_title_1 ?>
                </h2>
                <?php endif; ?>

                <?php if($strate_title_text_text_bg_title_2): ?>
                <h3 class="title medium italic">
                    <?= $strate_title_text_text_bg_title_2; ?>
                </h3>
                <?php endif; ?>

                <?= ($strate_title_text_text_bg_text)? $strate_title_text_text_bg_text: ''; ?>

                <?php if($strate_title_text_text_bg_label_link && $strate_title_text_text_bg_url_link): ?>
                <ul class="multiple-links">
                    <li>
                        <a href="<?= $strate_title_text_text_bg_url_link; ?>" class="link small-border"><?= $strate_title_text_text_bg_label_link; ?></a>
                    </li>
                </ul>
                <?php endif; ?>

            </div>
        </div>
    </div>
</div>
