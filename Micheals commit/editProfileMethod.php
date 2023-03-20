 <?php
include('connection.php');  
         
        $First_Name =  $_REQUEST['First_Name'];
        $Surname = $_REQUEST['Surname'];
        $Age =  $_REQUEST['Age'];
        $Gender = $_REQUEST['Gender'];
        $Location = $_REQUEST['Location'];
        $Experience = $_REQUEST['Experience'];

        $sql1 = "INSERT INTO profile (Age, Gender, Location, Experience) VALUES ('$Age', '$Gender', '$Location', '$Experience')";
        $sql2 = "INSERT INTO user (First_Name, Surname) Values ('$First_Name', '$Surname')";
         
        if(mysqli_query($conn, $sql1) && (mysqli_query($con, $sql2))){ 
                header("Location:myProfile.php");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($con);
        }
         
        // Close connection
        mysqli_close($con);
        ?>