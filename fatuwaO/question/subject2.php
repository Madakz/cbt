<?php
	session_start();
	// $sn=1;
	include'../includes/db.php';
	

	$student=$_SESSION['biodata_id'];
	$subject=$_SESSION['sub_id'];
if (isset($_POST['submit'])) {
	$answer=array();
	$que=array();
	// $stu=$_POST['student'];
	//$que=$_POST['que_id'];
	// $sub=$_POST['sub_id'];
	//print_r($_POST);
	for ($sn=1; $sn <=4 ; $sn++) { 		//
		
		$sk=$_POST;

		if (empty($sk['ans'][$sn])) {
			$sk['ans'][$sn]=0;
		}
		$answer[$sn]=$sk['ans'][$sn];		//passes the selected answer of key ans, index $sn to $answer array of index $sn
		//echo $sk['ans'][$sn];
		$stu=$sk['student'];
		// echo $que[$sn]=$sk['que_id'][$sn];
		$sub=$sk['sub_id'];
		$que[$sn]=$sk['que_id'][$sn];		//passes the selected question of key que_id, index $sn to $que array of index $sn
		//echo $sk['ans'][$sn];

		$check=mysql_query("SELECT biodata_id,subject_id,question_id FROM answers WHERE biodata_id='$stu' AND subject_id='$sub' AND question_id='$que[$sn]' ")or die(mysql_error());
		$check1=mysql_num_rows($check);
		// die($check1);
		// if ($check1 > 0) {
		// 	die("This Test has been taken by you");
		// }else{
			$sql=mysql_query("INSERT INTO answers VALUES('', '$answer[$sn]', '$stu', '$sub', '$que[$sn]')") or die(mysql_error());
			//print_r($sql);
			
		// }
			//echo $answer[$sn];
	}
	//echo $q[1]."<br/>".$q[2];
	//echo $que[1]."<br/>".$que[2];
	// foreach (array_values($_POST) as $key) { 
	// // $key = $_POST[$key];
	// // print_r($key);
	// // echo $disp;
	// 	// echo $key[$disp];
	// }
}
?>

<a href="../mark.php">View Score</a>