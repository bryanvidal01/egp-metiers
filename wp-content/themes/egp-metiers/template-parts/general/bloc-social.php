<?php
    $params_facebook_url = get_field('params_facebook_url', 'option');
    $params_instagram_url = get_field('params_instagram_url', 'option');
    $params_pinterest_url = get_field('params_pinterest_url', 'option');
    $params_twitter_url = get_field('params_twitter_url', 'option');
    $params_linkedin_url = get_field('params_linkedin_url', 'option');
?>
<ul class="social-menu-icons">
    <?php if($params_facebook_url): ?>
    <li>
        <a href="<?= $params_facebook_url; ?>" target="_blank">
            <?php lsd_get_template_part('icons','icon', 'facebook'); ?>
        </a>
    </li>
    <?php endif; ?>

    <?php if($params_instagram_url): ?>
    <li>
        <a href="<?= $params_instagram_url; ?>" target="_blank">
            <?php lsd_get_template_part('icons','icon', 'instagram'); ?>
        </a>
    </li>
    <?php endif; ?>
    <?php if($params_pinterest_url): ?>
    <li>
        <a href="<?= $params_pinterest_url; ?>" target="_blank">
            <?php lsd_get_template_part('icons','icon', 'pinterest'); ?>
        </a>
    </li>
    <?php endif; ?>
    <?php if($params_twitter_url): ?>
    <li>
        <a href="<?= $params_twitter_url; ?>" target="_blank">
            <?php lsd_get_template_part('icons','icon', 'twitter'); ?>
        </a>
    </li>
    <?php endif; ?>
    <?php if($params_linkedin_url): ?>
    <li>
        <a href="<?= $params_linkedin_url; ?>" target="_blank">
            <?php lsd_get_template_part('icons','icon', 'linkedin'); ?>
        </a>
    </li>
    <?php endif; ?>
</ul>
