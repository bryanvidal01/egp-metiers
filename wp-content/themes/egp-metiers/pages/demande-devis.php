<?php
/*
Template Name: Demande de devis
*/

get_header();

if($_POST){
    $returnForm = send_quote_request($_POST);
}
?>

<!--Hero page-->
<?php lsd_get_template_part('strates', 'strate', 'hero_not_home'); ?>

    <div class="padding-strate">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <?php lsd_get_template_part('general', 'bloc', 'ariane'); ?>
                </div>
            </div>
        </div>
    </div>

<?php lsd_get_template_part('strates', 'strate', 'text_defilement'); ?>

<div class="container-fluid" id="formulaire-devis">
    <div class="row">
        <div class="col-sm-8 mx-auto">
            <?php if(isset($returnForm['validation']) && $returnForm['validation'] === true): ?>
                <div class="success-message">
                    <div class="title medium text-center">
                        <?= $returnForm['message']; ?>
                    </div>
                </div>
            <?php else: ?>

            <?php if(isset($returnForm['validation']) && $returnForm['validation'] === false): ?>
            <div class="error-message">
                <?= $returnForm['message']; ?>
            </div>
            <?php endif; ?>
            <form action="#formulaire-devis" method="post" enctype="multipart/form-data" class="row form">
                <div class="col-sm-6">
                    <label for="societe">Société / Entité *</label>
                    <input type="text" id="societe" name="societe" class="require" placeholder="Nom de la Société / Entité">
                </div>
                <div class="col-sm-6">
                    <label for="profil">
                        Je suis
                    </label>
                    <select name="profil" id="profil">
                        <option value="Architecte">
                            Architecte
                        </option>
                        <option value="Commerçant">
                            Commerçant
                        </option>
                        <option value="Collectivité">
                            Collectivité
                        </option>
                        <option value="Hôtel">
                            Hôtel
                        </option>
                        <option value="Bureaux">
                            Bureaux
                        </option>
                        <option value="Restaurants">
                            Restaurants
                        </option>
                    </select>
                </div>
                <div class="col-sm-6">
                    <label for="secondName">Nom *</label>
                    <input type="text" id="secondName" name="secondName" class="require" placeholder="Votre nom">
                </div>
                <div class="col-sm-6">
                    <label for="fistName">Prénom *</label>
                    <input type="text" name="fistName" id="fistName" class="require" placeholder="Votre prénom">
                </div>
                <div class="col-sm-6">
                    <label for="emailAdress">Email *</label>
                    <input type="text" name="emailAdress" id="emailAdress" class="require" placeholder="Votre adresse email">
                </div>
                <div class="col-sm-6">
                    <label for="phoneNumber">Téléphone</label>
                    <input type="text" name="phoneNumber" id="phoneNumber" placeholder="Votre numéro de téléphone">
                </div>
                <div class="col-sm-6">
                    <label for="adressProject">Adresse du projet</label>
                    <input type="text" name="adressProject" id="adressProject" placeholder="L'adresse du projet">
                </div>
                <div class="col-sm-6">
                    <label for="timing">
                        Timing du projet
                    </label>
                    <input type="text" name="timing" id="timing" placeholder="Date">
                </div>
                <div class="col-sm-12">
                    <div class="container-uploads text-center">
                        <input type="file" name="upload_attachment[]" multiple accept=".doc,.docx,.jpg,.jpeg,.pdf,.png"/>
                        <div class="title small">
                            JOINDRE DES FICHIERS
                        </div>
                        <p>
                            Ici vous pouvez déposer tous les documents qui vous semblent être utiles à la compréhension de votre projet.<br/>
                            <strong>Types de fichiers :</strong> maquettes, plans de façade, photos de la façade actuelle, dossier de voirie, APD, inspirations, croquis…<br/>
                            <strong>Formats de fichiers :</strong> pour vos logos et fichiers d’impressions, merci de privilégiez les formats vectoriels : .pdf
                        </p>

                        <ul class="listFiles">

                        </ul>
                    </div>
                </div>
                <div class="col-sm-12">
                    <label for="sayMore">J'en dis plus sur mon projet</label>
                    <textarea name="sayMore" id="sayMore" placeholder="Décrivez-nous votre projet..." cols="30" rows="10"></textarea>
                </div>

                <div class="col-sm-12">
                    <div class="container-checkbox">
                        <label class="container-box">J'accepte la politique de confidentialitée
                            <input type="checkbox" class="consent">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                </div>

                <div class="col-sm-12 text-center">
                    <input type="submit" value="Envoyer">
                </div>
            </form>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php lsd_get_template_part('strates', 'strate', 'reassurance'); ?>

<?php
get_footer();
