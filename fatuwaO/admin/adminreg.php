<?php
	include'../includes/db.php';
	$error="";
	if (isset($_POST['sub'])) 
	{
		$username=$_POST['user_name'];
		$password=$_POST['password'];

		//print_r($_POST);

		if (empty($password)) {
			$error = "Enter password";
		}
		if (empty($username)) {
			$error="Enter username";
		}
		if (empty($error)) 
		{
			 if (strlen($password) < 6) 
			 {
			 	echo "please your password is short ";
			 }else

			 {
				$check=mysql_query("SELECT user_name,password FROM admin WHERE user_name='$username'AND password='$password' ");
			 	$check1=mysql_num_rows($check);
			// 	//print_r($check1);//die("kevinka");
			 	if ($check1 !=0)
				{
					$error='user already exist';
				}
			// //}
			 else
				 {

					$insert=mysql_query("INSERT INTO admin VALUES(NULL,'$username','$password')");//or die(mysql_error());
					if ($insert) {?>
						<script type="text/javascript">
						alert("successfull");

						window.location.href="index.php";
						</script>

						<?php
						// header("location:index.php");
					}else{?>

					<script type="text/javascript">
						alert("Account not created please try again");
					</script>

						<?php

					}
				}
			}
		}
	}

	//}



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
	<title>admin register</title>
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
				Register<?php echo $error;?>
			</div>
		</h2>
		<form class="ui large form" action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
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
				
				<button class="ui fluid large teal submit button" name="sub" type="submit" >Login</button>
				
			</div>

			<div class="ui error message"></div>

		</form>
	</div>
</div>

</body>
</html>
