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
        $userid = $result->fetch_column(1);
        $userid = $row["User_id"];
        if($count == 1){  
            setcookie("user", $userid, time()+7200,"/");
            header("Location:feed.php");
            $message = "You are logged in.";
  echo "<script type='text/javascript'>alert('$message');</script>" ; 
            
  exit(); 
        }  
        else{   
  header("Location:index.php");
              $message = "Username and/or Password incorrect.\\nTry again.";
  echo "<script type='text/javascript'>alert('$message');</script>";
        }     
        exit(); 
?>
