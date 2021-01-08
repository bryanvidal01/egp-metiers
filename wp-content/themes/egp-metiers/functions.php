<?php
define('THEME_DIR', get_template_directory() . '/');
define('THEME_URL', get_template_directory_uri() . '/');
define('HOME_URL', get_home_url());
define('AJAX_URL', THEME_URL . 'ajax-min.php');

//Correspondance de page
/*define('PAGE_PRESENTATION', get_field('params_page_presentation', 'option'));
define('PAGE_PARTENAIRES', get_field('params_page_partenaires', 'option'));
define('PAGE_FAQ', get_field('params_page_faq', 'option'));
define('PAGE_CLIENTS', get_field('params_page_clients', 'option'));
define('PAGE_EVENTS', get_field('params_page_event', 'option'));
define('PAGE_CONTACT', get_field('params_page_contact', 'option'));
define('PAGE_CONFIGURATEUR', get_field('params_page_configurateur', 'option'));


define('PAGE_PROFESSEURS', get_field('params_page_professeur', 'option'));
define('PAGE_COMPTE', get_field('params_page_compte', 'option'));*/


define('PAGE_GALERIE', get_field('params_galerie_id', 'option'));

require_once( __DIR__ . '/inc/datatypes.php');
require_once( __DIR__ . '/inc/configuration.php');
require_once( __DIR__ . '/inc/configuration_security.php');


require_once(__DIR__ . '/inc/methods.php');
require_once(__DIR__ . '/inc/ajax-methods.php');


// --------------------------
// Scripts et style
// --------------------------
add_action( 'init', 'scripts_site' );
function scripts_site(){
    if( !is_admin() || !is_user_logged_in() ){


        wp_enqueue_style( 'style_principal', get_template_directory_uri() . '/assets/stylesheets/style.css' );

        $dataToBePassed = array(
            'wp_ajax_url' => AJAX_URL,
            'exampleNonce' => wp_create_nonce('exampleNonce'),
        );
        wp_localize_script('script-js', 'ParamsData', $dataToBePassed );

    }
}



// Image Sizes
add_image_size( 'galerieSize', 400, 400, true );
add_image_size( 'imageStratePartners', 800, 800, true );

add_image_size( 'presentationPortraitSize', 1000, 1200, true );
add_image_size( 'presentationPaysageSize', 1920, 1080, true );
add_image_size( 'pushGalerie', 960, 540, true );
add_image_size( 'pushGalerieSingle', 960, 750, true );




//add_action('template_redirect', 'checkUserConnect'); // à mettre en commentaire pour MEP
function checkUserConnect() {
  $isConnect = is_user_logged_in();

  if(!is_user_logged_in() && $isConnect == false):
    wp_redirect(wp_login_url());
  endif;
}


function lsd_get_thumb($id, $size){
    if(empty($size)){
        $size = 'medium';
    }
    if($id){
        $img = wp_get_attachment_image_src($id, $size);
        $imgUrl = reset($img);

        return $imgUrl;
    }
}


if( !function_exists('redirect_404_to_homepage') ){

    add_action( 'template_redirect', 'redirect_404_to_homepage' );

    function redirect_404_to_homepage(){
        if(is_404()):
            wp_safe_redirect( home_url('/') );
            exit;
        endif;
    }
}


function lsd_get_template_part($folder = '', $slug, $name, $args = '') {
    if ($args):
        set_query_var( 'args', $args );
    endif;

    return get_template_part( 'template-parts/'. $folder . '/' .  $slug .'', $name );
}


register_nav_menu( 'primary', 'Primary Menu' );





function set_posts_per_page_for_towns_cpt( $query ) {
    if ( !is_admin() && $query->is_main_query() && is_post_type_archive( 'works' ) ) {
        $query->set( 'posts_per_page', '-1' );
    }
}
add_action( 'pre_get_posts', 'set_posts_per_page_for_towns_cpt' );


function get_custom_field($fieldName) {
    if(get_field($fieldName)){
        return get_field($fieldName);
    }elseif(get_sub_field($fieldName)){
        return get_sub_field($fieldName);
    }else{
        return '';
    }
}



function send_quote_request(){

    $error = false;
    $dataReturn = [];

    if($_POST['societe'] && $_POST['secondName'] && $_POST['fistName'] && $_POST['emailAdress']){
        $post_devis_society_name = $_POST['societe'];
        $post_devis_profil_name = $_POST['profil'];
        $post_devis_name = $_POST['secondName'];
        $post_devis_first_name = $_POST['fistName'];
        $post_devis_email = $_POST['emailAdress'];
        $post_devis_phone_number = $_POST['phoneNumber'];
        $post_devis_project_adress = $_POST['adressProject'];
        $post_devis_timing_project = $_POST['timing'];
        $post_devis_about_project = $_POST['sayMore'];

        $my_post = array(
            'post_title'    => 'Demande de devis de ' . $post_devis_first_name . ' ' . $post_devis_name,
            'post_status'   => 'draft',
            'post_type' => "devis"
        );

        $post_id = wp_insert_post( $my_post );


        if (!empty($_FILES['upload_attachment']['name'][0])) {

            require_once( ABSPATH . 'wp-admin/includes/image.php' );
            require_once( ABSPATH . 'wp-admin/includes/file.php' );
            require_once( ABSPATH . 'wp-admin/includes/media.php' );


            $files = $_FILES['upload_attachment'];
            $count = 0;
            $galleryImages = array();


            foreach ($files['name'] as $count => $value) {

                if ($files['name'][$count]) {

                    $file = array(
                        'name'     => $files['name'][$count],
                        'type'     => $files['type'][$count],
                        'tmp_name' => $files['tmp_name'][$count],
                        'error'    => $files['error'][$count],
                        'size'     => $files['size'][$count]
                    );

                    $upload_overrides = array( 'test_form' => false );
                    $upload = wp_handle_upload($file, $upload_overrides);


                    // $filename should be the path to a file in the upload directory.
                    $filename = $upload['file'];

                    // The ID of the post this attachment is for.
                    $parent_post_id = $post_id;

                    // Check the type of tile. We'll use this as the 'post_mime_type'.
                    $filetype = wp_check_filetype( basename( $filename ), null );


                    if($filetype['type'] != false){
                        // Get the path to the upload directory.
                        $wp_upload_dir = wp_upload_dir();

                        // Prepare an array of post data for the attachment.
                        $attachment = array(
                            'guid'           => $wp_upload_dir['url'] . '/' . basename( $filename ),
                            'post_mime_type' => $filetype['type'],
                            'post_title'     => preg_replace( '/\.[^.]+$/', '', basename( $filename ) ),
                            'post_content'   => '',
                            'post_status'    => 'inherit'
                        );

                        // Insert the attachment.
                        $attach_id = wp_insert_attachment( $attachment, $filename, $parent_post_id );

                        // Make sure that this file is included, as wp_generate_attachment_metadata() depends on it.
                        require_once( ABSPATH . 'wp-admin/includes/image.php' );

                        // Generate the metadata for the attachment, and update the database record.
                        $attach_data = wp_generate_attachment_metadata( $attach_id, $filename );
                        wp_update_attachment_metadata( $attach_id, $attach_data );

                        array_push($galleryImages, $attach_id);
                    }else{
                        $error = true;
                    }


                }

                $count++;

                // add images to the gallery field
                if(!$error){
                    update_field('post_devis_files', $galleryImages, $post_id);
                    update_field('post_devis_society_name', $post_devis_society_name, $post_id);
                    update_field('post_devis_profil_name', $post_devis_profil_name, $post_id);
                    update_field('post_devis_name', $post_devis_name, $post_id);
                    update_field('post_devis_first_name', $post_devis_first_name, $post_id);
                    update_field('post_devis_email', $post_devis_email, $post_id);
                    update_field('post_devis_phone_number', $post_devis_phone_number, $post_id);
                    update_field('post_devis_society_name', $post_devis_society_name, $post_id);
                    update_field('post_devis_project_adress', $post_devis_project_adress, $post_id);
                    update_field('post_devis_timing_project', $post_devis_timing_project, $post_id);
                    update_field('post_devis_about_project', $post_devis_about_project, $post_id);
                }

            }
        }
    }else{
        $error = true;
    }

    if(!$error){
        $dataReturn = [
            'validation' => true,
            'message' => 'Votre demande a bien été prise en compte.'
        ];

        return $dataReturn;
    }else{
        $dataReturn = [
            'validation' => false,
            'message' => 'Une erreur est survenue. Veuillez réésayer.'
        ];
        return $dataReturn;
    }
}
