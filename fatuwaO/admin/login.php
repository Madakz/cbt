<?php

include'../includes/db.php';
$error="";
$username=$_POST['user_name'];
$password=$_POST['password'];

$login=mysql_query("SELECT * FROM admin WHERE user_name='$username' AND password='$password' ")or die(mysql_error());
$check=mysql_num_rows($login)or die(mysql_error());

if ($check > "0") {
	header("location:index.php")
}else{
	$error="invalid record";
}


?>
<!DOCTYPE html>
<html>

<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
	<!-- Standard Meta -->
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

	<!-- Site Properties -->
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/semantic.min.css">  
	<link rel="stylesheet" type="text/css" href="css/custom.css"> 
	<link rel="stylesheet" type="text/css" href="cs">

	<script src="js/jquery.min.js"></script>
	<script src="js/semantic.min.js"></script>
	<script src="js/custom.js"></script>
</head>
<body>

<div class="ui middle aligned center aligned grid">
	<div class="column">
		<h2 class="ui teal image header">
			<img src="img/logo.png" class="image"> <br />
			<div class="content">
				Log-in<br><?php echo $error;?>
			</div>
		</h2>
		<form class="ui large form" action="">
			<div class="ui stacked segment">
				<div class="field">
					<div class="ui left icon input">
						<i class="user icon"></i>
						<input type="text" name="user_name" placeholder="Enter Username">
					</div>
				</div>
				<div class="field">
					<div class="ui left icon input">
						<i class="lock icon"></i>
						<input type="password" name="password" placeholder="Password">
					</div>
				</div>
				<div class="ui fluid large teal submit button">Login</div>
			</div>

			<div class="ui error message"></div>

		</form>

		<div class="ui message">
			Couldn't sign in? <a href="#">Recover Password</a>
		</div>
	</div>
</div>

</body>
</html>
