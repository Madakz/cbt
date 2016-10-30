<?php 
	session_start();
	include'includes/db.php';
		$jam_number="";
		$register='';
	if (isset($_POST['submit'])) {

		$first_name=$_POST['first_name'];
		$sur_name=$_POST['sur_name'];
		$other_name=$_POST['other_name'];
		$gender=$_POST['gender'];
		$date_birth=$_POST['date_birth'];
		$course=$_POST['course'];
		$subject1=$_POST['subject1'];
		$subject2=$_POST['subject2'];
		$subject3=$_POST['subject3'];
		$subject4=$_POST['subject4'];
		$phone=$_POST['phone'];
		$email=$_POST['email'];
		// $image=$_POST['image'];

		if (empty($email)) {
			die("Please Enter your email");
		}
		if (empty($course)) {
			die("Please Enter your email");
		}
		
		

		function keygen($length = 10) {
		    $token = '';
		    list($end, $start) = explode(' ', microtime());
		    mt_srand((float) $start + ((float) $end * 100000));
		    $inputs = array_merge(range(0, 9), range('A', 'Z'));
		    for ($i = 0; $i < $length; $i++) {
		        $token .= $inputs{mt_rand(0, 35)};
		    }
		    return $token;
		}

		//echo keygen();
		$jam_number=keygen();


		// $check=mysql_query("SELECT jam_number FROM biodata WHERE jam_number='$jam_number'") or die(mysql_error());
		// $check1=mysql_num_rows($check);
		// if ($check1 != 0) {?>
		 	<script type="text/javascript">
		// 	alert('please this jamb Number is already in use');
		// 	</script>
		 <?php	
		// }

		$check=mysql_query("SELECT email, jam_number FROM biodata WHERE jam_number='$jam_number' OR email='$email' AND phone='$phone'") or die(mysql_error());
		if (mysql_num_rows($check) != 0) {
			die("A record with this email and jamb Number already exist");
		}
		$validExtensions = array('.jpg', '.jpeg', '.gif', '.png');
	    $fileExtension = strrchr($_FILES['picture']['name'], ".");
	    //print_r($_FILES);
	    if (in_array($fileExtension, $validExtensions)) 
	    {
			$newName = time() . '_' . $_FILES['picture']['name'];
			$tmp=$_FILES['picture']['tmp_name'];
			$size = $_FILES['picture']['size'];
		    $destination = 'uploads/' . $newName;
			if (move_uploaded_file($_FILES['picture']['tmp_name'], $destination))
			{


					$insert=mysql_query("INSERT INTO biodata VALUES(NULL,'$jam_number','$first_name','$sur_name','$other_name','$gender','$date_birth','$course','$subject1','$subject2','$subject3','$subject4','$phone','$email','$newName', '0')") or die(mysql_error());
					$last_id=mysql_insert_id();
					if ($insert) 
					{
						$_SESSION['last_reg']=$last_id;
						?>
						<script>
							alert('Record successfull');
							window.location.href='biodata.php';
						</script>
						<?php
					}else{?>
						<script>
							alert('Record not successfully submited');
						</script>
					<?php
				}		
			}
		}else
	    {
	       	echo'You must upload an image...';
		}
	}
	
?>
<!DOCTYPE html>
<html>
<head>
	<title> Register</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/css.css">
	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">

</head>
<body>
	<div class="container-fluid">

		<div class="row" id="black"></div>
		<br><br>
		<div class="col-md-12">
				<h2 id="change" class="project-item one animated fadeInLeft">Registration Form</h2>
				<h5 id="change" class="project-item one animated fadeInRight">Provide your details below</h5>
				 <hr/>
			<form class="col-md-6"enctype="multipart/form-data" action="<?php echo  $_SERVER['PHP_SELF']; ?>"  method="POST" id="phorm">
			<!-- <div class="col-md-5 project-item one animated fadeInDown">
				<div class="thumbnail">
					<img src="img/students.jpg">
				</div>
					
			</div> -->
				<div class="col-md-9"></div>
				<div class="row">
					<fieldset class="col-md-6 project-item one animated fadeInRight" id="phorm">
						<label>First Name</label>
						<input type="text" name="first_name" placeholder="First Name"  class="form-control" required>
					</fieldset>
					<fieldset class="col-md-6 project-item one animated fadeInLeft" id="phorm">
						<label>Surname</label>
		        		<input type="text" name="sur_name" placeholder="Last Name" class="form-control" required>
					</fieldset>
					<fieldset class="col-md-6 project-item one animated fadeInRight" id="phorm">
						<label>Other Names</label>
		        		<input type="text" name="other_name" placeholder="Other Names" class="form-control" required>
					</fieldset><br>
					<fieldset class="col-md-6 project-item one animated fadeInLeft" id="phorm">
						<label>Email</label>
						<input type="email" name="email" placeholder="Email Address" class="form-control" required>
					</fieldset><br>

					<fieldset class="col-md-4 project-item one animated fadeInRight" id="phorm">
						<label>Gender</label><br/>
				      	<input type="radio" name="gender" value="male" checked>Male&nbsp;&nbsp;
						<input type="radio" name="gender" value="female">Female
					</fieldset>
					<fieldset class="col-md-4 project-item one animated fadeInLeft" id="phorm">
						<label>Date of Birth</label>
	        			<input type="date" name="date_birth" placeholder="Date of Birth" class="form-control" required>
					</fieldset>
					<fieldset class="col-md-4 project-item one animated fadeInLeft" id="phorm">
						<label>Course</label>
	        			<input type="text" name="course" placeholder="Course" class="form-control" required>
					</fieldset>
					<fieldset class="col-md-6 project-item one animated fadeInLeft" id="phorm">
						<label>First Subject</label>
					    <select name="subject1"  class="form-control">
					    	<?php $sub1=  mysql_query("SELECT * FROM subject");?>
					      	<option value="" >Select</option>
					      	<?php while ($fetch1=mysql_fetch_array($sub1)) {?>		
					      	<option value="<?php echo $fetch1['name'];?>"><?php echo $fetch1['name'];?></option>
					      	<?php
					      	}?>
					    </select>
					</fieldset>
					<fieldset class="col-md-6 project-item one animated fadeInLeft" id="phorm">
						<label>Second Subject</label>
					    <select name="subject2" class="form-control">
					    	<?php $sub1=  mysql_query("SELECT * FROM subject");?>
					      	<option value="" >Select</option>
					      	<?php while ($fetch2=mysql_fetch_array($sub1)) {?>		
					      	<option value="<?php echo $fetch2['name'];?>"><?php echo $fetch2['name'];?></option>
					      	<?php
					      	}?>
					    </select>
					</fieldset>
					<fieldset class="col-md-6 project-item one animated fadeInLeft" id="phorm">
						<label>Third Subject</label>
					    <select name="subject3" class="form-control">
					    	<?php $sub3=  mysql_query("SELECT * FROM subject");?>
					      	<option value="" >Select</option>
					      	<?php while ($fetch3=mysql_fetch_array($sub3)) {?>		
					      	<option value="<?php echo $fetch3['name'];?>"><?php echo $fetch3['name'];?></option>
					      	<?php
					      	}?>
					    </select>
					</fieldset>
					<fieldset class="col-md-6 project-item one animated fadeInLeft" id="phorm">
						<label>Fourth Subject</label>
					    <select name="subject4" class="form-control">
					    	<?php $sub4=  mysql_query("SELECT * FROM subject");?>
					      	<option value="" >Select</option>
					      	<?php while ($fetch4=mysql_fetch_array($sub4)) {?>		
					      	<option value="<?php echo $fetch4['name'];?>"><?php echo $fetch4['name'];?></option>
					      	<?php
					      	}?>
					    </select>
					</fieldset>
					<fieldset class="col-md-6 project-item one animated fadeInLeft" id="phorm">
						<label>Phone Number</label>
	    				<input type="text" name="phone" placeholder="Phone Number" class="form-control" required>
					</fieldset>
					<fieldset class="col-md-6 project-item one animated fadeInLeft" id="phorm">
						<label>Upload Image</label>
	   					<input type="file" name="picture" placeholder="Upload Image" class="form-control">
					</fieldset>
				</div>
				<button class="btn btn-primary" name="submit">Register</button>
			</form>

			<div class="col-md-6 project-item one animated fadeInDown"></div>
		</div>
	</div>
	<div class="row"><p id="foot">&copy; 2016 madivel All rights reserved.</p></div>
</body>
</html>