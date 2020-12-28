<?php
function wp_custom_post_type() {
    register_post_type('works',
        array(
            'labels'      => array(
                'name'          => __('Réalisations', 'lsd_lang'),
                'singular_name' => __('Réalisation', 'lsd_lang'),
            ),
            'public'      => true,
            'has_archive' => true,
            'publicly_queryable'  => 'false'
        )
    );
}

add_action('init', 'wp_custom_post_type');

function wp_register_taxonomy() {

}

add_action('init', 'wp_register_taxonomy');
