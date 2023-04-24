<?php

    (include 'connection.php');
    $organisation_id = $_REQUEST['organisation_id'];

    $sql = "UPDATE organisation SET isDeleted = '0' WHERE organisation_id = '$organisation_id'";


    if(mysqli_query($con, $sql)){ 
        header("Location:Acompanies.php");
    } else{
        echo "ERROR: Hush! Sorry $sql. "
            . mysqli_error($con);
    }







?>