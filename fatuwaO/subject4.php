<?php
	session_start();
	include 'includes/db.php';
	$student=$_SESSION['biodata_id'];
	if (!isset($_SESSION['sub_id'])) {
		die("You cannot view your score, please take the test");
	}
	$subject=$_SESSION['sub_id'];
	$jamb=$_SESSION['jam'];
	function mark_student($biodata_id, $subject_id, $jamb){
		$person=$_SESSION['stu_name'];
		$qwery=mysql_query("SELECT id,answer FROM questions WHERE subject_id='$subject_id'") or die(mysql_error());   //pass the subject_id in place of 2. collect from session super global
		$grade=0;
		while ($row=mysql_fetch_array($qwery)) {
			$que_id=$row['id'];
			// echo $que_id;
			$kwery=mysql_query("SELECT answer FROM answers WHERE biodata_id='$biodata_id' AND subject_id='$subject_id' AND question_id='$que_id'") or die(mysql_error());
			while ($answer=mysql_fetch_array($kwery)) {
				$result = array_intersect_uassoc($row, $answer, "strcasecmp");
					$result=count($result);
			}
			$grade=$grade + $result;
		}
	
			$grade = $grade*5;
			$check=mysql_query("SELECT * FROM grades WHERE biodata_id='$biodata_id' AND subject_id='$subject_id'") or die(mysql_error());
			// $update=mysql_query("UPDATE biodata SET grade='$Total_grade' WHERE id='$biodata_id'") or die(mysql_error());
			if (mysql_num_rows($check) > 0) {
			?>
			<script>
				alert('This Test has been taken by you');
				window.location.href='subject_list.php';
			</script>
			<?php
			die("This Test has been taken by you");
		}
		$insert_grade=mysql_query("INSERT INTO grades VALUES (NULL, '$grade', '$biodata_id', '$subject_id')") or die(mysql_error());
				// replace 1 with the student id gotten from session.
		
				$Total_grade="";
				$sql=mysql_query("SELECT * FROM grades WHERE biodata_id='$biodata_id'") or die(mysql_error());
				while($sql1=mysql_fetch_array($sql)){
					$Total_grade=$Total_grade + $sql1['grade'];
					// echo $Total_grade;
				}
				$update=mysql_query("UPDATE biodata SET grade='$Total_grade' WHERE id='$biodata_id'") or die(mysql_error());
		// echo $result;
		$get_subj=mysql_query("SELECT name FROM subject WHERE id='$subject_id'") or die(mysql_error());
		$fetch_subj=mysql_fetch_array($get_subj) or die(mysql_error());
		return "Congratulations! ".$person .".<br/> Subject: ". $fetch_subj['name'] .".<br/>"."You scored " .$grade ." points";
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title> cbt exam page</title>
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
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<?php
					if (empty($_GET['view'])) {
				?>
						<center><h1 class="project-item one animated fadeInRight"><?php echo mark_student($student, $subject, $jamb);?></h1></center>
						<br><br/>
						<a href="subject4.php?view=90"><center class="mycontact-social animated fadeInUp"><button class="btn btn-warning" id="but"> View Total Score</center></a></button><br><br>
						<a href="subject_list.php"><center class="mycontact-social animated fadeInUp"><button class="btn btn-success" id="but"> Take Next Test</center></a></button><br><br>
						 <br>
						 <br>
				<?php
					}elseif ($_GET['view']==90) {
						$sql=mysql_query("SELECT grade FROM biodata WHERE id='$student'") or die(mysql_error());
						$show_grade=mysql_fetch_array($sql) or die(mysql_error());
						?>
							<center><h1 class="project-item one animated fadeInRight">Your Total is: <?php echo $show_grade['grade'];?></h1></center>
							<br><br/>
							<a href="subject_list.php"><center class="mycontact-social animated fadeInUp"><button class="btn btn-success" id="but"> Take Next Test</center></a></button><br><br>
							 <br>
							 <br>
						<?php
						}
				?>
				
			</div>
			<div class="col-md-2"></div>
		</div><br>
	</div>
</body>
</html>