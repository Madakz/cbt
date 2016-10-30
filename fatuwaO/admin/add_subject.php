<?php
	 include"../includes/db.php";
	if (isset($_POST['submit'])) {
		$sub_name=$_POST['subject'];

		$check=mysql_query("SELECT name FROM subject WHERE name='$sub_name'") or die(mysql_error());
		if (mysql_num_rows($check) != 0) {
			die("Subject exist in the database");
		}else{
			$insert=mysql_query("INSERT INTO subject VALUES(NULL,'$sub_name')") or die(mysql_error());
			if ($insert) {
				?>
					<script>
					alert("Subject addition successful");
					</script>
				<?php
			}else{
				?>
					<script>
					alert("Subject addition failed");
					</script>
				<?php
			}
		}
	}

?>

<form action="<?php echo  $_SERVER['PHP_SELF']; ?>" method="POST">
	 <div class="ui main text container">
    <h1 class="ui header">Add Subject </h1>
    <form class="ui form" action="<?php echo  $_SERVER['PHP_SELF']; ?>"  method="POST">
		<div class="field">		    
		    <div class="one field">
		      	<div class="field">
		      		<label>Subject Name</label>
		        	<input type="text" name="subject" placeholder="Subject Name" required>
		     	</div>
		     	<button class="big positive ui left floated button" name="submit">Add Subject</button>
		    </div>
		</div>
</form>