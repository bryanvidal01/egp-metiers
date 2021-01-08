<?php
    $content_list_works_text_defilement = get_sub_field('content_list_works_text_defilement');
    $content_list_works_menu_name = get_sub_field('content_list_works_menu_name');
    $content_list_works_image_native = get_sub_field('content_list_works_image_native');
    if($content_list_works_image_native){
        $content_list_works_image_native_url = lsd_get_thumb($content_list_works_image_native, 'large');
    }

    $content_list_works_list = get_sub_field('content_list_works_list');
?>


<div class="strate-metiers-list">
    <?php if($content_list_works_text_defilement): ?>
    <div class="text-defilement">
        <div class="text-content"><?= $content_list_works_text_defilement; ?></div>
    </div>
    <?php endif; ?>

    <div class="container-list-metiers">
        <?php if($content_list_works_menu_name): ?>
        <p class="uppercase"><?= $content_list_works_menu_name; ?></p>
        <?php endif; ?>

        <div class="container-image native">
            <?php if(isset($content_list_works_image_native_url) && $content_list_works_image_native_url): ?>
            <img src="<?= $content_list_works_image_native_url; ?>" alt="">
            <?php endif; ?>
        </div>

        <?php if($content_list_works_list): ?>
        <ul class="list-metiers">
            <?php
            foreach ($content_list_works_list as $content_list_works_list_item):
                $imageID = $content_list_works_list_item['content_list_works_list_item_image'];
                $imageURL = '';
                if($imageID){
                    $imageURL = lsd_get_thumb($imageID, 'large');
                }

            ?>
                <li>
                    <a href="<?= (isset($content_list_works_list_item['content_list_works_list_item_link']) && $content_list_works_list_item['content_list_works_list_item_link']) ? $content_list_works_list_item['content_list_works_list_item_link'] : ''; ?>">
                        <?php if(isset($content_list_works_list_item['content_list_works_list_item_title_1']) && $content_list_works_list_item['content_list_works_list_item_title_1']): ?>
                        <?= $content_list_works_list_item['content_list_works_list_item_title_1']; ?>
                        <?php endif; ?>
                        <h2 class="small">
                            <?php if(isset($content_list_works_list_item['content_list_works_list_item_title_2']) && $content_list_works_list_item['content_list_works_list_item_title_2']): ?>
                                <?= $content_list_works_list_item['content_list_works_list_item_title_2']; ?>
                            <?php endif; ?>
                        </h2>
                        <?php if(isset($imageURL) && $imageURL): ?>
                        <div class="container-image">
                            <img src="<?= $imageURL; ?>" alt="">
                        </div>
                        <?php endif; ?>
                    </a>
                </li>

            <?php
            endforeach;
            ?>
        </ul>
        <?php endif; ?>
    </div>
</div>
