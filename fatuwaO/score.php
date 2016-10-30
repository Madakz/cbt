<?php
	session_start();
	include "./includes/db.php";
	$student=$_SESSION['stu_name'];
	$stu_id=$_SESSION['biodata_id'];
	$jam_no=$_SESSION['jam'];
	// $id=$_GET['jos'];
	// $_SESSION['sub_id']=$_GET['jos'];
	// $student=$_SESSION['biodata_id'];
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
		<div class="row" id="header">
			<div class="col-md-3"><h2><b>Test Me</b></h2></div>
			<div class="col-md-9" id="black" style="margin-left:0px; padding-top:20px;">
				<ul>
					<li style="margin-right:20px;"><a href="logout.php"><b>logout</b></a></li>
				</ul>
			</div>
		</div>
		<hr/>
		<div class="row" id="black"></div>
		<br><br><br>
		<div class="row" >
			<CENTER><h1>PRINT SCREEN</h1></CENTER>
				<div class="col-md-2">
				<?php
					$sub=mysql_query("SELECT * FROM biodata WHERE id='$stu_id'") or die(mysql_error());
					$qwert=mysql_fetch_array($sub) or die(mysql_error());
				?>
					<div class="thumbnail">
						<img src="uploads/<?php echo $qwert['image'];?>">
					</div>
				</div>
				<div class="col-md-8"></div>
				<div class="col-md-12">
					<h4>Name: <?php echo $student; ?></h4>
					<h4>Registration Number: <?php echo $jam_no; ?></h4>
				</div>
				
			<div class="col-md-12"><hr>
				<div class="col-md-3">
					<?php
						$id1=$_SESSION['subj_id1'];
						$subj1=$_SESSION['subj1'];
						$sub1=mysql_query("SELECT * FROM grades WHERE subject_id='$id1' AND biodata_id='$stu_id'") or die(mysql_error());
						$qwert1=mysql_fetch_array($sub1) or die(mysql_error());
					?>
					<h4><?php echo $subj1.": " .$qwert1['grade']; ?></h4>
				</div>
				<div class="col-md-3">
					<?php
						$id2=$_SESSION['subj_id2'];
						$subj2=$_SESSION['subj2'];
						$sub2=mysql_query("SELECT * FROM grades WHERE subject_id='$id2' AND biodata_id='$stu_id'") or die(mysql_error());
						$qwert2=mysql_fetch_array($sub2) or die(mysql_error());
					?>
					<h4><?php echo $subj2.": ". $qwert2['grade']; ?></h4>
				</div>
				<div class="col-md-3">
					<?php
						$id3=$_SESSION['subj_id3'];
						$subj3=$_SESSION['subj3'];
						$sub3=mysql_query("SELECT * FROM grades WHERE subject_id='$id3' AND biodata_id='$stu_id'") or die(mysql_error());
						$qwert3=mysql_fetch_array($sub3) or die(mysql_error());
					?>
					<h4><?php echo $subj3.": ". $qwert3['grade']; ?></h4>
				</div>
				<div class="col-md-3">
					rtfyguhigyft
					<?php
						$id4=$_SESSION['subj_id4'];
						$subj4=$_SESSION['subj4'];
						$sub4=mysql_query("SELECT * FROM grades WHERE subject_id='$id4' AND biodata_id='$stu_id'") or die(mysql_error());
						$qwert4=mysql_fetch_array($sub4) or die(mysql_error());
					?>
					<h4><?php echo $subj4.": " .$qwert4['grade']; ?></h4>
				</div>

			</div>
			<div class="col-md-12">
				<?php
					$sql=mysql_query("SELECT grade FROM biodata WHERE id='$stu_id'") or die(mysql_error());
					$show_grade=mysql_fetch_array($sql) or die(mysql_error());
				?>
				<h4>Total Score:<?php echo $show_grade['grade'];?></h4>
			</div>

		</div>
		<div class="row"><p id="foot">&copy; 2016 madivel All rights reserved.</p></div>
	</div>
</body>
</html>