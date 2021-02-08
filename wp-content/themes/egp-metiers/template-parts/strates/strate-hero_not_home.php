<?php
    $hero_not_home_image = get_field('hero_not_home_image');
    if($hero_not_home_image){
        $hero_not_home_image_url = lsd_get_thumb($hero_not_home_image, 'heroNotHome');
    }
?>
<div class="hero not-front-page padding-strate">
    <?php if(isset($hero_not_home_image_url) && $hero_not_home_image_url): ?>
    <img src="<?= $hero_not_home_image_url; ?>" class="background-strate" alt="Image de fond <?= get_the_title(); ?>">
    <?php endif; ?>
    <div class="information-hero">
        <h1 class="title big white">
            <?= get_the_title(); ?>
        </h1>
    </div>

</div>
