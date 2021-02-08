<?php
    $hero_image_background = get_field('hero_image_background');
    if($hero_image_background){
        $hero_image_background_url = lsd_get_thumb($hero_image_background, 'presentationPaysageSize');
    }

    $hero_home_title = get_field('hero_home_title');
    $hero_home_introduction = get_field('hero_home_introduction');

    $hero_home_push_sup_title = get_field('hero_home_push_sup_title');
    $hero_home_push_title = get_field('hero_home_push_title');
    $hero_home_push_description = get_field('hero_home_push_description');
    $hero_home_push_label = get_field('hero_home_push_label');
    $hero_home_push_url = get_field('hero_home_push_url');
    $hero_home_push_image = get_field('hero_home_push_image');

    if($hero_home_push_image) {
        $hero_home_push_image_url = lsd_get_thumb($hero_home_push_image, 'imageStratePartners');
    }
?>

<div class="hero front-page padding-strate">
    <?php if(isset($hero_image_background_url) && $hero_image_background_url): ?>
    <img src="<?= $hero_image_background_url; ?>" class="background-strate" alt="Image de fond <?= $hero_home_title; ?>">
    <?php endif; ?>

    <div class="information-hero">
        <?php if($hero_home_title): ?>
        <h1 class="title medium white">
            <?= $hero_home_title; ?>
        </h1>
        <?php endif; ?>

        <?php if($hero_home_introduction): ?>
        <div class="white">
            <?= $hero_home_introduction; ?>
        </div>
        <?php endif; ?>
    </div>

    <div class="push-hero">
        <?php if($hero_home_push_sup_title): ?>
        <p class="white bold title small">
            <?= $hero_home_push_sup_title; ?>
        </p>
        <?php endif; ?>
        <div class="container-push-hero">
            <?php if(isset($hero_home_push_image_url) && $hero_home_push_image_url): ?>
            <div class="img-container">
                <img src="<?= $hero_home_push_image_url; ?>" alt="Image <?= $hero_home_push_title; ?>">
            </div>
            <?php endif; ?>
            <div class="text-push-hero">
                <?php if($hero_home_push_title): ?>
                <p class="bold title small">
                    <?= $hero_home_push_title; ?>
                </p>
                <?php endif; ?>
                <?php if($hero_home_push_description): ?>
                <div>
                    <?= $hero_home_push_description; ?>
                </div>
                <?php endif; ?>

                <?php if($hero_home_push_label && $hero_home_push_url): ?>
                <a href="<?= $hero_home_push_url ?>" class="link"><?= $hero_home_push_label ?></a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
