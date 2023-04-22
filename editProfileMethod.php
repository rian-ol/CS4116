 <?php
include('connection.php');  
         
        $First_Name =  $_REQUEST['First_Name'];
        $Surname = $_REQUEST['Surname'];
        $Age =  $_REQUEST['Age'];
        $Gender = $_REQUEST['Gender'];
        $Location = $_REQUEST['Location'];
        $experience = $_REQUEST['experience'];
        $iUniqueNumber = rand(1,9999999);
        $skill_name = $_REQUEST['skill_name'];

        $sql1 = "INSERT INTO profile (Age, Gender, Location, experience, User_id, skill_name) VALUES ('$Age', '$Gender', '$Location', '$experience', '$iUniqueNumber', '$skill_name' )";
        $sql2 = "INSERT INTO user (First_Name, Surname, User_id) Values ('$First_Name', '$Surname', '$iUniqueNumber')";
         
        if(mysqli_query($con, $sql2) && (mysqli_query($con, $sql1))){ 
                header("Location:myProfile.php");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($con);
        }
         
        // Close connection
        mysqli_close($con);
        ?>
