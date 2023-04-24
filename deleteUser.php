<?php

    (include 'connection.php');
    $User_id = $_REQUEST['User_id'];

    $sql = "UPDATE user SET isDeleted = '1' WHERE User_id = '$User_id'";


    if(mysqli_query($con, $sql)){ 
        header("Location:Ausers.php");
    } else{
        echo "ERROR: Hush! Sorry $sql. "
            . mysqli_error($con);
    }







?>