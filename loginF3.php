<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0045)http://www.stevedawson.com/rsa/rsa-demo-v1.1/ -->
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>Shyaw Login</title>

<link rel="stylesheet" type="text/css" href="./index_files/style.css" media="screen">
<link rel="stylesheet" type="text/css" href="./index_files/form.css" media="screen">
<script src="./index_files/jquery.min.js.download"></script>
<script src="./index_files/jquery.min.js(1).download"></script>
<link rel="stylesheet" href="./index_files/jquery-ui.css">
<script src="./index_files/jquery-ui.js.download"></script>

</head>
<body>

<div class="index-box">
			<h2> Login to finance department / Shyaw School</h2>
            <p>Enter your login details in the boxes below, then click the 'Click to Login' button.</p><br>
<form action="loginF3.php" method="post">
<p>Username: <input type="text" name="login_username" size="35" maxlength="100"></p>
<p>Password: <input type="password" name="login_password" size="20" maxlength="20"></p>
<p><button type="submit" name="log" class="button">Click to Login</button></p>
</form>
<br>
</div>
		<div class="clear"></div>

<div class="footer">
			<p>© 2017 -Powered By 4F Group - v1.0</p>
</div>

</body></html>

<?php
 
 if(isset($_POST ['log']))
{
	$user = $_POST['login_username'];
	$pass = $_POST['login_password'];
	
	
	if($user && $pass)
	{
		require("connect1.php");
	$query = mysql_query("SELECT * FROM `passf3` WHERE `username` = '$user' and `password` = '$pass'");
	$numrows= mysql_num_rows($query);
	if($query === FALSE) { 
    die(mysql_error());
} 
	if($numrows)
	{ 
	$data = mysql_fetch_assoc($query);
	$username = $data['username'];
	$password = $data['password'];
		
	if($user == $username && $pass == $password)
	{
		
	echo "<script>location.assign('Finance3.php')</script>";
		
	}
	}
}
}
 ?>   