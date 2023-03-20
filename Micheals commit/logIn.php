<?php     
session_start(); 
    include('connection.php');  
    $Email = $_POST['Email'];  
    $Password = $_POST['Password'];  
      
        //to prevent from mysqli injection  
        $Email = stripcslashes($Email);  
        $Password = stripcslashes($Password);  
        $Email = mysqli_real_escape_string($con, $Email);  
        $Password = mysqli_real_escape_string($con, $Password);  
      
        $sql = "select * from user where Email = '$Email' and Password = '$Password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            header("Location:vacancies.php");
  exit(); 
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     
        exit(); 
?>