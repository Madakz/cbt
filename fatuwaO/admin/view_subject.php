<?php 
    include "../includes/db.php";
    require "../function/function.php";
    $apps = new App;

    if (empty($_GET['sub'])) {
        $_GET['sub']=0;
    }elseif($_GET['sub']==4){
        ?>
        <script>
            alert("Subject is succesfully deleted!!!");
        </script>
        <?php
    }
    


    ?>

    <!DOCTYPE html>
    <html>
        <head>
            <title>View Students</title>
             <script type="text/javascript" src="../js/jquery2.js"></script>
            <script type="text/javascript" src="../js/jquery.dataTables.js"></script>
            <script type="text/javascript" src="../js/dataTables.foundation.js"></script> <!-- works -->

            <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
            <link rel="stylesheet" type="text/css" href="../css/dataTables.bootstrap.css">
            <link rel="stylesheet" type="text/css" href="../css/jquery.dataTables.css">
            <link rel="stylesheet" type="text/css" href="../css/jquery.dataTables_themeroller.css">
        </head>
        <body>
           <?php $apps->fetch('subject', '');   ?>

           <script type="text/javascript">
                $('#myTable').DataTable();
                
            </script>
        </body>
    </html>
    
