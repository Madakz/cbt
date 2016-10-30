<?php
	session_start();
	include "includes/db.php";

	if (isset($_POST['login'])) {
		$jamb = mysql_real_escape_string(trim(strip_tags($_POST['jam_number'])));
		$query=mysql_query("SELECT * FROM biodata WHERE jam_number='$jamb' ") or die(mysql_error());
		$fetch=mysql_fetch_array($query) or die(mysql_error());
		if (mysql_num_rows($query) > 0) {
			$_SESSION['stu_name']=$fetch['sur_name']. " ". $fetch['first_name'];
			$_SESSION['biodata_id']=$fetch['id'];
			$_SESSION['image']=$fetch['image'];
			$_SESSION['jam']=$fetch['jam_number'];
			header("location:instructions.php");
		}else{
		 ?> 
		    <script>
		        alert("Invalid login details");
		    </script>
		 <?php
		 }
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<script src="js/jquery.js"></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/css.css">
	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">

</head>
<body  id="white-body">
	<div class="container-fluid">
		<div class="row" id="header">
			<div class="col-md-3"><h2><b>Test Me</b></h2></div>
			<div class="col-md-9"  id="black" style="margin-left:0px; padding-top:20px;">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="register.php">Register</a></li>
					<li><a href="login.php">Login</a></li>
				</ul>
			</div>
		</div>
		<div class="row" id="black"></div>
		<br><br><br>
		<div class="row" >
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<div class="row">
					<div class="col-md-12 mycontact-social animated fadeInDown" id="a" >
						<h3><i class="fa fa-user"></i> Candidate's Login</h3>
						<div class="row " style="background-color: white">
							<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
								<div class="form-row" style="margin: 20px">
									<div class="col-md-12">
										<label>Registration Number:</label>
										<input type="text" name="jam_number" placeholder="Enter Registration Number" class="form-control"><br/>
										<div style="margin-bottom: 10px">
											<button class="mycontact-social animated fadeInUp btn btn-success" id="but" name="login">Login</button>
										</div>
									</div>
									<div class="col-md-12 ui message">
										<p style="color:#000;">Couldn't sign in? <a href="#">Recover Password</a></p>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4"></div>
		</div>
	</div>
	<!-- <div class="row"><p id="foot">&copy; 2016 madivel All rights reserved.</p></div> -->
</body>
</html>