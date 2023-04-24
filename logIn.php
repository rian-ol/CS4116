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
        $userid = $row["User_id"];
        $userType = $row["User_Type"];
        if($count == 1){  
            if ($userType == 'admin') {
                setcookie("user", $userType, time()+7200,"/");
                header("Location:home.php");
            }else{
                setcookie("user", $userid, time()+7200,"/");
                $_SESSION['login'] = "Sucessfully logged in as $Email";
                 header("Location:home.php");
                }
  exit(); 
        }  
        else{  
             $_SESSION['status'] = "Wrong username/password, please try again";
    header("Location:index.php");
  
        }
        
             
        exit(); 
?>
