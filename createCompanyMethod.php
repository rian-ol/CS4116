<?php
include('connection.php');  
         
        $userid = $_COOKIE["user"];
        $organisation_name =  $_REQUEST['organisation_name'];
        $organisation_description = $_REQUEST['organisation_description'];

        $sql1 = "INSERT INTO organisation SET organisation_name = '$organisation_name', organisation_description = '$organisation_description', User_id = '$userid'";
        $sql2 = "UPDATE user SET compCreated = '1' WHERE User_id = '$userid'";
        
         
        if(mysqli_query($con, $sql2) && (mysqli_query($con, $sql1))){ 
                header("Location:myProfile.php");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($con);
        }
         
        // Close connection
        mysqli_close($con);
        ?>
