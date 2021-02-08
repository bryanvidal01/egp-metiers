<?php
    $params_facebook_url = get_field('params_facebook_url', 'option');
    $params_instagram_url = get_field('params_instagram_url', 'option');
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
</ul>
