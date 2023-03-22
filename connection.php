<?php
 
$conn = "";
  

    $servername = "sql8.freesqldatabase.com";
    $dbname = "sql8605107";
    $username = "sql8605107";
    $password = "fInLpz9ULj";
  
    $con = mysqli_connect($servername, $username, $password, $dbname);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    } 

 
?>
