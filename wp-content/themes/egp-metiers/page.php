<?php get_header(); the_post();?>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <?php add_filter('user_consent_state','do_shortcode'); ?>
            <?php echo get_the_content(); ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>

