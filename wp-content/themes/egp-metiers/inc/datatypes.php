<?php
function wp_custom_post_type() {
    register_post_type('galerie',
        array(
            'labels'      => array(
                'name'          => __('Galerie', 'lsd_lang'),
                'singular_name' => __('Galerie', 'lsd_lang'),
            ),
            'public'      => true,
            'has_archive' => false,
        )
    );

    register_post_type('devis',
        array(
            'labels'      => array(
                'name'          => __('Devis', 'lsd_lang'),
                'singular_name' => __('Devis', 'lsd_lang'),
            ),
            'public'      => true,
            'has_archive' => false,
            'publicly_queryable'  => false
        )
    );
}

add_action('init', 'wp_custom_post_type');

function wp_register_taxonomy() {

}

add_action('init', 'wp_register_taxonomy');
