<?php
    $params_menu_footer_1 = get_field('params_menu_footer_1', 'option');
    $params_menu_footer_2 = get_field('params_menu_footer_2', 'option');
    $params_menu_footer_siege = get_field('params_menu_footer_siege', 'option');

?>

<a href="#popin-call-back" class="info-bulle">
    <div class="icon-round">
        ?
    </div>
    <div class="text-bulle">
        Je souhaite <div class="font-italic">être accompagné</div>
    </div>
</a>

<footer>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3">
                <a href="<?php echo get_site_url(); ?>" class="header-logo">
                    <?php lsd_get_template_part('icons','header', 'logo'); ?>
                </a>
            </div>
            <div class="col-sm-3">
                <?php if($params_menu_footer_1): ?>
                <ul class="nav-footer">
                    <?php foreach ($params_menu_footer_1 as $params_menu_footer_1_item): ?>
                    <li>
                        <a href="<?php echo get_the_permalink($params_menu_footer_1_item); ?>" class="sans-serif small white">
                            <?php echo get_the_title($params_menu_footer_1_item); ?>
                        </a>
                    </li>
                    <?php endforeach; ?>
                </ul>
                <?php endif; ?>
            </div>
            <div class="col-sm-3">
                <?php if($params_menu_footer_2): ?>
                <ul class="nav-footer">
                    <?php foreach ($params_menu_footer_2 as $params_menu_footer_2_item): ?>
                        <li>
                            <a href="<?php echo get_the_permalink($params_menu_footer_2_item); ?>" class="sans-serif small white">
                                <?php echo get_the_title($params_menu_footer_2_item); ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
                <?php endif; ?>
            </div>
            <div class="col-sm-3 text-right">
                <p class="small">
                    <?= $params_menu_footer_siege; ?>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <p>
                    Suivez-nous
                </p>
                <?php lsd_get_template_part('general', 'bloc', 'social'); ?>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12 text-center">
                <p class="small">
                    ©2020 Enseigne Gambetta
                </p>
            </div>
        </div>
    </div>
</footer>


<?php
    $choix_one_title = get_field('choix_one_title', 'option');
    $choix_one_description = get_field('choix_one_description', 'option');

    $choix_two_title = get_field('choix_two_title', 'option');
    $choix_two_description = get_field('choix_two_description', 'option');

?>
<div class="popin-call">
    <div class="content-popin">
        <div class="cross">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cross-dark.png" alt="" width="25px">
        </div>
        <div class="container-fluid">
            <div class="row step-1">
                <div class="col-sm-6 container-item">
                    <div class="filigran">
                        Choix 1
                    </div>
                    <?php if($choix_one_title): ?>
                    <div class="title small">
                        <?= $choix_one_title; ?>
                    </div>
                    <?php endif; ?>
                    <?php if($choix_one_description): ?>
                    <p>
                        <?= $choix_one_description; ?>
                    </p>
                    <?php endif; ?>
                    <a href="<?= get_the_permalink(PAGE_DEVIS); ?>" class="link small-border">
                        Demander un devis en ligne
                    </a>
                </div>
                <div class="col-sm-6 container-item">
                    <div class="filigran">
                        Choix 2
                    </div>
                    <?php if($choix_two_title): ?>
                    <div class="title small">
                        <?= $choix_two_title; ?>
                    </div>
                    <?php endif; ?>

                    <?php if($choix_two_description): ?>
                    <p>
                        <?= $choix_two_description; ?>
                    </p>
                    <?php endif; ?>
                    <a href="" class="link small-border link-step-2">
                        Être rappelé
                    </a>
                </div>
            </div>

            <div class="row step-2" style="display: none;">
                <div class="col-sm-6">
                    <form class="row contact-form-call form">
                        <div class="col-sm-12">
                            <label for="">
                                Votre nom : <span class="asterix">*</span>
                                <input type="text" id="userName" name="userName" placeholder="Nom">
                            </label>
                        </div>
                        <div class="col-sm-12">
                            <label for="">
                                Votre prénom : <span class="asterix">*</span>
                                <input type="text" id="userSecondName" name="userSecondName" placeholder="Prénom">
                            </label>
                        </div>
                        <div class="col-sm-12">
                            <label  for="">
                                Votre email : <span class="asterix">*</span>
                                <input type="email" id="userMail" name="userMail" placeholder="address@mail.com">
                            </label>
                        </div>
                        <div class="col-sm-12">
                            <label  for="">
                                Votre numéro de téléphone : <span class="asterix">*</span>
                                <input type="text" id="userPhone" name="userPhone" placeholder="Numéro de téléphone">
                            </label>
                        </div>
                        <div class="col-sm-12 text-center">
                            <input type="submit" value="Envoyer">
                        </div>
                        <div class="popin">
                            <div class="message">
                                <div class="info-return">
                                    Votre message à bien été envoyé
                                </div>
                                <a href="<?php echo get_site_url(); ?>" class="link small-border">Retourner sur la page d'accueil</a>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-sm-6 container-item">
                    <div class="filigran">
                        Choix 1
                    </div>
                    <?php if($choix_one_title): ?>
                        <div class="title small">
                            <?= $choix_one_title; ?>
                        </div>
                    <?php endif; ?>
                    <?php if($choix_one_description): ?>
                        <p>
                            <?= $choix_one_description; ?>
                        </p>
                    <?php endif; ?>
                    <a href="<?= get_the_permalink(PAGE_DEVIS); ?>" class="link small-border">
                        Demander un devis en ligne
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="loader-container">
    <div class="text-loader sans-serif small">
        <?= get_bloginfo( 'name' ); ?>
    </div>

    <div class="percent-number" id="percent-load">
        0
    </div>

    <div class="masque" id="masque"></div>
</div>



        <?php wp_footer(); ?>

    </body>
</html>
