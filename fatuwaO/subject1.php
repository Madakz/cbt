<?php
	session_start();
	include "./includes/db.php";
	$student=$_SESSION['stu_name'];
	$stu_id=$_SESSION['biodata_id'];
	$jam_no=$_SESSION['jam'];
	$id=$_GET['jos'];
	$_SESSION['sub_id']=$_GET['jos'];
	$student=$_SESSION['biodata_id'];
	$get_subj=mysql_query("SELECT * FROM subject WHERE id='$id' ")or die(mysql_error());
	$fetch_subj=mysql_fetch_array($get_subj) or die(mysql_error());


?>
<!DOCTYPE html>
<html>
<head>
	<title> Test</title>
	<script type="text/javascript" src="./LIB/jquery-2.0.3.js"></script>
    <script type="text/javascript" src="./LIB/jquery.countdownTimer.js"></script>
    <link rel="stylesheet" type="text/css" href="./css/jquery.countdownTimer.css" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/css.css">
	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
</head>
<body>
	<div class="container-fluid">
		<div class="row" id="header">
			<div class="col-md-3"><h2><b>Test Me</b></h2></div>
		</div>
		<div class="row" id="black"></div>
		<br><br>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8 paper">
				<?php
					$subject=mysql_query("SELECT * FROM questions WHERE subject_id='$id' ")or die(mysql_error());
					$sn=1;
					$num_of_records=mysql_num_rows($subject);
					if (mysql_num_rows($subject) <= 0) {
				?>
					<script>
						alert("This subject is not ready! Please select another subject.");
						window.location.href='subject_list.php';
					</script>
				<?php
					// die("<a href='subject_list.php'><button class='btn btn-primary'>Go back</button></a>");
					}
				?>
				<div class="row">
					<div class="col-md-7">
						<h1 class="project-item one animated fadeInRight">Attempt All Questions</h1>
						<h3>SUBJECT: <b><?php echo $fetch_subj['name']; ?></b></h3>
					</div>
					<div class="col-md-5">
						<h3><u>Time</u></h3>
                            <table style="border:0px;">
                                <tr>
                                    <td style="width:60px;text-align:center;">Minutes</td>
                                    <td style="width:70px;text-align:center;">Seconds</td>
                                </tr>
                                <tr>
                                    <td colspan="4"><span id="ms_timer"></span></td>
                                </tr>
                            </table>
                            <script>
                                $(function(){
                                    $('#ms_timer').countdowntimer({
                                        minutes :20,
                                        seconds : 0,
                                        size : "lg",
                                        expiryUrl:"subject3.php"
                                    });
                                });
                            </script>
	                           
					</div>
				</div>

				<br>
				 <br>
				 <?php
				 while ($row=mysql_fetch_array($subject)) 
					{
						echo "<b>".$sn."</b>" ."."." " .$row['question']."."."<br/>";
						
						?>
						<form method="POST" action="subject3.php">
							<input type="radio" name="ans[<?php echo $sn; ?>]" value="a" >A.&nbsp;&nbsp;<?php echo $row['option_a'];?>
							<br>
							<input type="radio" name="ans[<?php echo $sn; ?>]" value="b">B.&nbsp;&nbsp;<?php echo $row['option_b'];?>
							<br>
							<input type="radio" name="ans[<?php echo $sn; ?>]" value="c">C.&nbsp;&nbsp;<?php echo $row['option_c'];?>
							<br>
							<input type="radio" name="ans[<?php echo $sn; ?>]" value="d">D.&nbsp;&nbsp;<?php echo $row['option_d'];?>
							<br/><br/>
							<input type="hidden" name="student" value="<?php echo $student; ?>">
							<input type="hidden" name="sub_id" value="<?php echo $id;?>">
							<input type="hidden" name="que_id[<?php echo $sn; ?>]" value="<?php echo $row['id'];?>">
						<?php

						$sn=$sn +1;
					}
					?>
						<input type="submit" name="submit" value="submit" class="btn btn-success">
						<br/><br/><br/>
					</form>
					<div class="row">
						<div class="col-md-2"></div>
							<a href="subject_list.php"><span class="mycontact-social animated fadeInUp"><button class="btn btn-danger" id="but">Go back</span></button></a><br><br>
						</div>
						<div class="col-md-10" ></div>
					</div>
			</div>
			<div class="col-md-2" ></div>
		</div><br>
	</div>
</body>
</html>