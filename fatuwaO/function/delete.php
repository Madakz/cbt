<?php

include'db.php';
require"../function/function.php";
$apps = new App;


$del=$_GET['ans'];
 //echo $del;
 ///print_r($_GET);

 // function delete($del){


$s = mysql_query("DELETE FROM answer WHERE id='$del'") or die(mysql_error());


// }
// delete($del);
//echo $del;
// header('location:index.php');





?>