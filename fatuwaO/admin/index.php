<?php
include"../includes/db.php";
require"../function/function.php";
$apps = new App;

?>

<!DOCTYPE html>
<html>
<head>
	<title>admin index</title>
	<style type="text/css">
		a{
			padding-right: 15px;
		}

	</style>
</head>

<body>

<a href="view_user.php">view users</a>
  <a href="view_subject.php">view subjects</a>
  <a href="view_question.php">view question</a>
  <a href="view_answer.php">view answer</a>
  <a href="#">edit question</a>
  <a href="add_question.php">add question</a>
  <a href="add_subject.php">add subjects</a>

	<!-- <a href="index.php?user=1">view users</a>
	<a href="index.php?user=2">edite question</a>
	<a href="index.php?user=3">edit answers</a>
	<a href="index.php?user=4">view subjects</a>
	<a href="index.php?user=5">add subjects</a>
	<a href="index.php?user=6">view question</a>
	<a href="index.php?user=7">view answer</a>
 -->

	<div class="panel-body" id="dosearch-panel">
        <?php
       	// if (empty($_GET)) {
       	// 	echo "this is bob";
       	// 	// $_GET['user'] = 0;
       	// }elseif ($_GET['user'] == 1) {
        // 	$apps->viewusers();
        // }elseif($_GET['user'] == 2){
        	
        // }elseif($_GET['user'] == 3){
       	
       	// }elseif($_GET['user'] == 4){
       	// 	$apps->viewsubject();
       	// }elseif($_GET['user'] == 5){

       	// }elseif($_GET['user'] == 6){
       	// 	$apps->viewquestion();
       	// }elseif($_GET['user'] == 7){
        // 	$apps->viewanswer();
        // }else{
        // 	(empty($_GET));
        // }
        
        ?>
  </div>

</body>
</html>