<?php
    $reassurance_list = get_field('params_reassurances', 'option');
?>

<div class="strate-reassurance">
    <div class="container-fluid">
        <div class="row">

            <?php
            foreach ($reassurance_list as $reassurance_item):
                $iconID = $reassurance_item['params_reassurances_icon'];
                $iconURL = '';
                if($iconID){
                    $iconURL = lsd_get_thumb($iconID, 'full');
                }
            ?>
                <div class="col-sm-3 col-6 text-center">
                    <div class="item-reassurance">
                        <?php if(isset($iconURL) && $iconURL): ?>
                        <img src="<?= $iconURL; ?>" height="100" alt="<?= $reassurance_item['params_reassurances_title']; ?>">
                        <?php endif; ?>
                        <p class="title">
                            <?= $reassurance_item['params_reassurances_title']; ?>
                        </p>
                        <p>
                            <?= $reassurance_item['params_reassurances_description']; ?>
                        </p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
