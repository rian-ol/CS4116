<?php

    (include 'connection.php');
    $organisation_id = $_REQUEST['organisation_id'];
    $value = 1;

    $sql = "UPDATE organisation SET isAuthourised = '$value' WHERE organisation_id = '$organisation_id'";


    if(mysqli_query($con, $sql)){ 
        header("Location:Acompanies.php");
    } else{
        echo "ERROR: Hush! Sorry $sql. "
            . mysqli_error($con);
    }







?>
