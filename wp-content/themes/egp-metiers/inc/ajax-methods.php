<?php

add_action( 'wp_ajax_send_message', 'send_message' );
add_action( 'wp_ajax_nopriv_send_message', 'send_message' );

function send_message()
{
    $userName = $_POST['userName'];
    $userSecondName = $_POST['userSecondName'];
    $userMail = $_POST['userMail'];
    $userPhone = $_POST['userPhone'];


    if($userName && $userSecondName && $userMail && $userPhone){
        $to = get_field('choix_two_email', 'option');
        $subject = $userName . ' ' . $userSecondName . ' vous a envoyé(e) un message';

        $messageToSend = 'Nom : ' . $userName . '<br/>';
        $messageToSend .= 'Prénom : ' . $userSecondName . '<br/>';
        $messageToSend .= 'Adresse mail : ' . $userMail . '<br/>';

        $messageToSend .= 'Téléphone : ' . $userPhone . '<br/>';

        $headers = array('Content-Type: text/html; charset=UTF-8');

        wp_mail( $to, $subject, $messageToSend, $headers);

        $returnDatas['message'] = 'Votre message a bien été envoyé';
        $returnDatas['code'] = 200;
    }else{
        $returnDatas['message'] = 'Une erreur est survenue lors de l’envoi du message';
        $returnDatas['code'] = 300;
    }

    wp_send_json( $returnDatas );
}
