<?php
	session_start();
	$name=$_SESSION['stu_name'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Test Me-Instructions</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/css.css">
	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
</head>
<body>
	<div class="container-fluid">
		<div class="row" id="header">
			<div class="col-md-3"><h2><b>Test Me</b></h2></div>
			<div class="col-md-9"  id="black" style="margin-left:0px; padding-top:20px;">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="logout.php">logout</a></li>
				</ul>
			</div>			
		</div>
		<hr/>
		<div class="row" id="black"></div>
		<br><br><br><br>
		<div class="row" >
			<div class="col-md-2" ></div>
			<div class="col-md-8">
				<h3>Welcome! You are logged in as <?php echo $name; ?></h3>
				<h1 class="project-item one animated fadeInRight"><b>INSTRUCTIONS</b></h1><br>
				<h4 class="project-item one animated fadeInLeft" style="color:red;">Read the instructions carefully before you proceed</h4>
				<h4 class="project-item one animated fadeInRight">(1.) You are expected to attempt each subject for 45 minutes.</h4>
				<h4 class="project-item one animated fadeInLeft">(2.) There are twenty (20) questions and you are expected to attempt all.</h4>
				<h4 class="project-item one animated fadeInRight">(3.) If you do not understand a question, you can skip by attempting the next question and later come back to it.</h4>
				<h4 class="project-item one animated fadeInLeft">(4.) Upon answering the 20th question, the submit
				button will be activated. You can either click on the View Score button to view your score on that subject.</h4>
				<h4 class="project-item one animated fadeInRight">(5.) After viewing your score click on next subject and take test.</h4>
				<h4 class="project-item one animated fadeInLeft">(6.) Repeat step 3 and 4 for every subject</h4>
				<h4 class="project-item one animated fadeInRight">(7.) At the end of the examination, click on the finish button to view your overall.</h4>
				<h4 class="project-item one animated fadeInLeft">(8.) If you exhaust your time, the system will end the test for you automatically and present your final result.</h4>
				<!-- <h4 class="project-item one animated fadeInRight">NOTE: Click the start button below to retrieve your questions. The timer will start immediately</h4> -->
				<h4 class="project-item one animated fadeInRight"><i class="fa fa-chevron-right"></i> Click the <b>"Next"</b> button to go on to the next phase </h4>

				 <br>
				 <br>
				 <br>
				 <br>
				 <br>
				 <br>
				 <br>

 				<a href="subject_list.php"><center class="mycontact-social animated fadeInUp"><button class="btn btn-success" id="but"> Next <i class="fa fa-chevron-right"></i></center></a></button><br><br>
			</div>
			<div class="col-md-2" > </div>

		</div><br>
		<!-- <div class="row" id="black"> <center><p id="foot">&copy; 2016 jaywizzy All rights reserved.</p> </center></div> -->
	</div>
</body>
</html>