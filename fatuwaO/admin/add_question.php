<?php
	 include"../includes/db.php";
	if (isset($_POST['submit'])) {
		$sub_name=$_POST['subject'];
		$que=$_POST['question'];
		$opta=$_POST['opta'];
		$optb=$_POST['optb'];
		$optc=$_POST['optc'];
		$optd=$_POST['optd'];
		$ans=$_POST['ans'];


		$check=mysql_query("SELECT question, answer FROM questions WHERE question='$que' AND answer='$ans'") or die(mysql_error());
		if (mysql_num_rows($check) != 0) {
			die("Question exist in the database");
		}else{
			$insert=mysql_query("INSERT INTO questions VALUES(NULL,'$que', '$sub_name', '$opta', '$optb', '$optc', '$optd', '$ans' )") or die(mysql_error());
			if ($insert) {
				?>
					<script>
					alert("Question addition successful");
					</script>
				<?php
			}else{
				?>
					<script>
					alert("Question addition failed");
					</script>
				<?php
			}
		}
	}

?>

<form action="<?php echo  $_SERVER['PHP_SELF']; ?>" method="POST">
	 <div class="ui main text container">
    <h1 class="ui header">Add Question </h1>
    <form class="ui form" action="<?php echo  $_SERVER['PHP_SELF']; ?>"  method="POST">
		<div class="field">
			 <div class="one fields">
		      	<div class="field">
		      		<label>Subject</label>
				    <select class="ui dropdown" name="subject">
				    	<?php $sub1=  mysql_query("SELECT * FROM subject");?>
				      	<option value="" >Select Subject...</option>
				      	<?php while ($fetch1=mysql_fetch_array($sub1)) {?>		
				      	<option value="<?php echo $fetch1['id'];?>"><?php echo $fetch1['name'];?></option>
				      	<?php
				      	}?>
				    </select>
		     	</div>
		    </div>	    
		    <div class="two field">
		      	<div class="field">
		      		<label>Question</label>
		      		<textarea name="question" cols="30" rows="5" placeholder="Question" required></textarea>
		        	<!-- <input type="text" name="question" placeholder="Question" required> -->
		     	</div>
		     	<div class="field">
		      		<label>Option A</label>
		        	<input type="text" name="opta" placeholder="Option A" required>
		     	</div>
		    </div>
		    <div class="two field">
		      	<div class="field">
		      		<label>Option B</label>
		        	<input type="text" name="optb" placeholder="Option B" required>
		     	</div>
		     	<div class="field">
		      		<label>Option C</label>
		        	<input type="text" name="optc" placeholder="Option C" required>
		     	</div>
		    </div>
		    <div class="two fields">
		      	<div class="field">
		      		<label>Option D</label>
				    <input type="text" name="optd" placeholder="Option D" required>
		     	</div>
		     	<div class="field">
		      		<label>Answer</label>
		        	<input type="text" name="ans" placeholder="a, b, c  or d" required>
		     	</div>
		    </div>
		    <button class="big positive ui left floated button" name="submit">Add Subject</button>
		</div>
</form>