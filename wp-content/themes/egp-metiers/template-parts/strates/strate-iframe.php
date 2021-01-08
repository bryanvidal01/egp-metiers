<?php
    $content_iframe_iframe = get_sub_field('content_iframe_iframe');
    if($content_iframe_iframe):
?>

<div class="strate-iframe">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-10 mx-auto">
                <?= $content_iframe_iframe; ?>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>
