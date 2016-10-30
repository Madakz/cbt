<?php
	session_start();
	include'./includes/db.php';
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Candidate's Print out</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/css.css">
	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	
</head>
<body>
	<div class="container-fluid">
		<div class="row" id="black"></div>
		<br><br>
		<div class="row" >
			<div class="col-md-12">
				<?php
						$last_id=$_SESSION['last_reg'];
						$sql=mysql_query("SELECT * FROM biodata WHERE id='$last_id'") or die(mysql_error());
						$print=mysql_fetch_array($sql);
					?>
				<center><h1 >CANDIDATE'S BIODATA</h1></center>
				<div class="col-md-2">
					<div class="thumbnail">
						<img src="uploads/<?php echo $print['image'];?>">
					</div>
				</div>
				<div class="col-md-8"></div>
				<div class="col-md-12">
					
					<h4>Surname: <?php echo $print['sur_name'];?></h4>
					<h4>First Name: <?php echo $print['first_name'];?></h4>
					<h4>Othernames: <?php echo $print['other_name'];?></h4>
					<h4>Email: <?php echo $print['email'];?></h4>
					<h4>Course: <?php echo $print['course'];?></h4>
					<h4>Date Of Birth: <?php echo $print['date_birth'];?></h4>
					<h4>Gender: <?php echo $print['gender'];?></h4>
					<h4>Phone Number: <?php echo $print['phone'];?></h4>
					<h4>Registration Number: <?php echo $print['jam_number']; ?></h4>
					<h2>LIST OF SUBJECTS</h2>
					<div class="row">
						<div class="col-md-3"><h4>SUBJECT 1: <?php echo $print['subject1']; ?></h4></div>
						<div class="col-md-3"><h4>SUBJECT 2: <?php echo $print['subject2']; ?></h4></div>
						<div class="col-md-3"><h4> SUBJECT 3: <?php echo $print['subject3']; ?></h4></div>
						<div class="col-md-3"><h4> SUBJECT 4: <?php echo $print['subject4']; ?></h4></div>
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<div class="col-md-6"><a href="login.php"><button class="btn btn-success">Take test!</button></a><br/><br/></div>
				<div class="col-md-6"></div>
			</div>
		</div>
		<div class="row"><p id="foot">&copy; 2016 madivel All rights reserved.</p></div>
	</div>
</body>
</html>