 <?php
   include"../includes/db.php";
   require "../function/function.php";

  	$myapp= new app;
	if ($_GET['student']) {
		$del_id = $_GET['student'];
		$myapp->delete("biodata",$del_id);
		header("location:view_user.php?s=1");
	}
	if ($_GET['question']) {
		$del_id = $_GET['question'];
		$myapp->delete("questions",$del_id);
		header("location:view_question.php?que=2");
	}
	// if ($_GET['answer']) {
	// 	$del_id = $_GET['answer'];
	// 	$myapp->delete("answers",$del_id);
	// 	header("location:view_answer.php?ans=3");
	// }
	if ($_GET['subject']) {
		$del_id = $_GET['subject'];
		$myapp->delete("subject",$del_id);
		header("location:view_subject.php?sub=4");
	}
        
?>