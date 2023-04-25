<?php
include('connection.php');  
         
        $userid = $_COOKIE["user"];
        $First_Name =  $_REQUEST['First_Name'];
        $Surname = $_REQUEST['Surname'];
        $Age =  $_REQUEST['Age'];
        $Gender = $_REQUEST['Gender'];
        $Location = $_REQUEST['Location'];
        $skill_name = $_REQUEST['skill_name'];
        $value = "1";

        $sql1 = "INSERT INTO profile SET User_id='$userid', Age = '$Age', Gender = '$Gender', Location = '$Location', skill_name = '$skill_name' ";
        $sql2 = "UPDATE user SET First_Name = '$First_Name', Surname = '$Surname', profileComp='$value'  WHERE User_id = '$userid'";
         
        if(mysqli_query($con, $sql2) && (mysqli_query($con, $sql1))){ 
                header("Location:myProfile.php");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($con);
        }
         
        // Close connection
        mysqli_close($con);
        ?>
