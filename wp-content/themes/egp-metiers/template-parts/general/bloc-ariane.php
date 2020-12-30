<?php
    $navigationAriane = [];

    if(is_page()){
        $currentPost = get_the_ID();

        // Parent post
        $parentPost = wp_get_post_parent_id($currentPost);

        if($parentPost){
            $navigationAriane[] = $parentPost;
        }

        $navigationAriane[] = get_the_ID();
    }elseif (is_single()){
        $navigationAriane[] = PAGE_GALERIE;
        $navigationAriane[] = get_the_ID();
    }
?>

<div class="ariane">
    <ul>
        <li>
            <a href="<?= get_site_url(); ?>">Accueil</a>
        </li>

        <?php
        if($navigationAriane):
            foreach ($navigationAriane as $navigationArianeItem):
        ?>
            <li <?= ($navigationArianeItem == get_the_ID())? 'class="active"': ''; ?>>
                <?php if(get_the_ID() != $navigationArianeItem): ?>
                <a href="<?= get_the_permalink($navigationArianeItem); ?>">
                <?php endif; ?>
                    <?= get_the_title($navigationArianeItem); ?>
                <?php if(get_the_ID() != $navigationArianeItem): ?>
                </a>
                <?php endif; ?>
            </li>
        <?php
            endforeach;
        endif;
        ?>
    </ul>
</div>
