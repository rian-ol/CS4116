<?php

    (include 'connection.php');
    $Vacancy_id = $_REQUEST['Vacancy_id'];

    $sql = "UPDATE vacancy SET isDeleted = '0' WHERE Vacancy_id = '$Vacancy_id'";


    if(mysqli_query($con, $sql)){ 
        header("Location:Avacancies.php");
    } else{
        echo "ERROR: Hush! Sorry $sql. "
            . mysqli_error($con);
    }







?>