<?php
include('connection.php');  
        $userid = $_COOKIE['user'];
        $Vacancy_name =  $_REQUEST['Vacancy_name'];
        $Vacancy_description = $_REQUEST['Vacancy_description'];
        // $Experienced_required =  $_GET['Experienced_required'];
        $Location = $_REQUEST['Location'];
        $skill_name = $_REQUEST['skill_name'];

        $sql = "SELECT * FROM organisation WHERE  User_id= '$userid'";
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

        $organisation_id = $row['organisation_id'];
            
            
 
         
            $sql = "INSERT INTO Vacancy (Vacancy_name, Vacancy_description, Location, skill_name, organisation_id) 
            VALUES ('$Vacancy_name', '$Vacancy_description','$Location', '$skill_name', '$organisation_id')";
            
            if(mysqli_query($con, $sql)){
                header("Location:myCompany.php");
    
            
            } else{
                echo "ERROR: Hush! Sorry $sql. "
                    . mysqli_error($con);
            }
        
        // Close connection
        mysqli_close($con);
        ?>
