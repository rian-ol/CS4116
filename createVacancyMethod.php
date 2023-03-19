<?php
include('connection.php');  
        $Vacancy_name =  $_REQUEST['Vacancy_name'];
        $Vacancy_description = $_REQUEST['Vacancy_description'];
        $Experienced_required =  $_REQUEST['Experienced_required'];
        $Location = $_REQUEST['Location'];
 
         
        // Performing insert query execution
        // here our table name is user
        $sql = "INSERT INTO Vacancy (Vacancy_name, Vacancy_description, Experienced_required, Location) 
        VALUES ('$Vacancy_name', '$Vacancy_description', '$Experienced_required','$Location')";
         
        if(mysqli_query($con, $sql)){
            header("Location:vacancies.php");
 
           
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($con);
        }
         
        // Close connection
        mysqli_close($con);
        ?>
    