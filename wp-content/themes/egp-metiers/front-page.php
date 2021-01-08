<?php
/*
Template Name: Homepage
*/

get_header();
?>
<!--Hero page-->
<?php lsd_get_template_part('strates', 'strate', 'hero_home'); ?>


<?php if( have_rows('content') ):
    while ( have_rows('content') ) : the_row();
        if( get_row_layout() == 'content_title_text_image' ):

            lsd_get_template_part('strates', 'strate', 'text_image');

        elseif( get_row_layout() == 'content_slider' ):

            lsd_get_template_part('strates', 'strate', 'realisation_slider');

        elseif( get_row_layout() == 'content_reassurance' ):
            lsd_get_template_part('strates', 'strate', 'reassurance');

        elseif( get_row_layout() == 'content_text_center' ):
            lsd_get_template_part('strates', 'strate', 'text_center');

        elseif( get_row_layout() == 'content_list_works' ):
            lsd_get_template_part('strates', 'strate', 'metiers_list');

        endif;
    endwhile;
else :

endif; ?>

<?php
get_footer();
