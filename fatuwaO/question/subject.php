<?php
	session_start();
	include"../includes/db.php";
	$sql=mysql_query("SELECT * FROM subject");
	while($fetch=mysql_fetch_array($sql)){?>
		<a href="subject1.php?jos=<?php echo $fetch['id'] ?>"><button><?php echo$fetch['name']?></button></a>
	<?php
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
</html>