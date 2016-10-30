<?php
	session_start();
	include "./includes/db.php";
	$name=$_SESSION['stu_name'];
	$candidate_id=$_SESSION['biodata_id'];
?>
<!DOCTYPE html>
<html>
<head>
	<title> cbt-subjects</title>
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
					<li><a href="logout.php">Logout</a></li>
				</ul>
			</div>
		</div>
		<hr/>
		<div class="row" id="black"></div>
		<br><br><br><br>
		<div class="row" >
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<center>	<h1 class="project-item one animated fadeInRight">Online Computer Based Test</h1></center><br>
			</div>
		<div class="col-md-2" ></div>
		<div class="col-md-12">
			<div class="row">
				<CENTER><h3><?php echo strtoupper($name);?> YOUR SUBJECT COMBINATIONS ARE:</h3></CENTER>
				<CENTER><h4 style="color:red;">Click on the subject to take Test</h4></CENTER>
			</div>
			<div class="row">
			<div class="col-md-2" ></div>
			<div class="col-md-9" >
				<?php
					$sn=1;
					$sql=mysql_query("SELECT subject1, subject2, subject3, subject4 FROM biodata WHERE id='$candidate_id'") or die(mysql_error());
					while($fetch=mysql_fetch_array($sql)){?>
						<?php 
							$subj=$fetch['subject1'];
							$sql1=mysql_query("SELECT * FROM subject WHERE name='$subj'") or die(mysql_error()); 
							$id=mysql_fetch_array($sql1);
							$_SESSION['subj_id1']=$id['id'];
							$_SESSION['subj1']=$id['name'];
						?>
						<div class="col-md-3"><h4><label>SUBJECT 1:&nbsp;</label><br/><a href="subject1.php?jos=<?php echo $id['id']; ?>"><button  class="btn btn-primary"><?php echo $fetch['subject1']?></button></a></h4></div>
						<?php 
							$subj=$fetch['subject2'];
							$sql1=mysql_query("SELECT * FROM subject WHERE name='$subj'") or die(mysql_error()); 
							$id=mysql_fetch_array($sql1);
							$_SESSION['subj_id2']=$id['id'];
							$_SESSION['subj2']=$id['name'];
						?>
						<div class="col-md-3"><h4><label>SUBJECT 2:&nbsp;</label><br/><a href="subject1.php?jos=<?php echo $id['id'] ?>"><button  class="btn btn-primary"><?php echo $fetch['subject2']?></button></a></h4></div>
						<?php 
							$subj=$fetch['subject3'];
							$sql1=mysql_query("SELECT * FROM subject WHERE name='$subj'") or die(mysql_error()); 
							$id=mysql_fetch_array($sql1);
							$_SESSION['subj_id3']=$id['id'];
							$_SESSION['subj3']=$id['name'];
						?>
						<div class="col-md-3"><h4><label>SUBJECT 3:&nbsp;</label><br/><a href="subject1.php?jos=<?php echo $id['id'] ?>"><button  class="btn btn-primary"><?php echo $fetch['subject3']?></button></a></h4></div>
						<?php 
							$subj=$fetch['subject4'];
							$sql1=mysql_query("SELECT * FROM subject WHERE name='$subj'") or die(mysql_error()); 
							$id=mysql_fetch_array($sql1);
							$_SESSION['subj_id4']=$id['id'];
							$_SESSION['subj4']=$id['name'];
						?>
						<div class="col-md-3"><h4><label>SUBJECT 4:&nbsp;</label><br/><a href="subject1.php?jos=<?php echo $id['id'] ?>"><button  class="btn btn-primary"><?php echo $fetch['subject4']?></button></a></h4></div>
					<?php
					$sn ++;
					}
				?>
			</div>
			<div class="col-md-1" ></div>
			</div>
		</div>


		<div class="col-md-12">
			<a href="score.php"><center><button class="btn btn-success" style="margin-top: 100px">View Test Score</button></center></a>
		</div>

		</div><br>
<!-- <div class="row" id="black"> <center><p id="foot">&copy; 2016 jaywizzy All rights reserved.</p> </center></div> -->

	</div>
</body>
</html>