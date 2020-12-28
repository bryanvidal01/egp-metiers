<?php
/*
Template Name: Homepage
*/

get_header();
?>

<!--Hero page-->
<?php lsd_get_template_part('strates', 'strate', 'hero_home'); ?>

<!-- Background grey-->
<?php lsd_get_template_part('strates', 'strate', 'text_image'); ?>

<!--Texte centré-->
<?php lsd_get_template_part('strates', 'strate', 'text_center'); ?>

<!--Metiers-->
<?php lsd_get_template_part('strates', 'strate', 'metiers_list'); ?>

<!-- Slider -->
<?php lsd_get_template_part('strates', 'strate', 'realisation_slider'); ?>

<!-- Reassurance -->
<?php lsd_get_template_part('strates', 'strate', 'reassurance'); ?>

<?php
get_footer();
