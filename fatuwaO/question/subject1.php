<?php
session_start();
include'../includes/db.php';
$id=$_GET['jos'];
$_SESSION['sub_id']=$_GET['jos'];
$student=$_SESSION['biodata_id'];
// echo $_SESSION['sub_id']."<br/>";

$biology=mysql_query("SELECT * FROM questions WHERE subject_id='$id' ")or die(mysql_error());

$sn=1;
// if (isset($_POST['sub'])) {
// 	for (;$sn <=10 ; $sn++) { 
// 		$q.$sn=$_POST["ans[$sn]"];
// 		echo $q.$sn;
// 	}
// }

while ($row=mysql_fetch_array($biology)) 
{
	echo $sn ."."." " .$row['question']."."."<br/>";
	
	?>
	<form method="POST" action="subject2.php">
		<input type="radio" name="ans[<?php echo $sn; ?>]" value="a" ><?php echo $row['option_a'];?>
		<br>
		<input type="radio" name="ans[<?php echo $sn; ?>]" value="b"><?php echo $row['option_b'];?>
		<br>
		<input type="radio" name="ans[<?php echo $sn; ?>]" value="c"><?php echo $row['option_c'];?>
		<br>
		<input type="radio" name="ans[<?php echo $sn; ?>]" value="d"><?php echo $row['option_d'];?>
		<br>
		<input type="hidden" name="student" value="<?php echo $student; ?>">
		<input type="hidden" name="sub_id" value="<?php echo $id;?>">
		<input type="hidden" name="que_id[<?php echo $sn; ?>]" value="<?php echo $row['id'];?>">
	<?php

	$sn=$sn +1;
}

// if (isset($_POST['sub'])) {
// 	$a=$_POST['ans'];
	
	
// }

?>
<input type="submit" name="submit" value="submit">
</form>
