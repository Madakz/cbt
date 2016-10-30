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
	
	
		$insert_grade=mysql_query("UPDATE biodata set grade='$grade' WHERE id='$biodata_id'") or die(mysql_error());		// replace 1 with the student id gotten from session.
		
		// $o=$result;
		// echo "<br/>".$o;
		// echo $result;
		return "Congratulations!!! ".$person. " with Registration number " .$jamb .". You score is " .$grade;
	}

	echo mark_student($student, $subject, $jamb);

?>
<br/><a href="logout.php">Logout</a>