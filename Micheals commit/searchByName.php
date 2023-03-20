<?php

    include('connection.php');  

    if(isset($_POST["query"])){  
        $output = '';  
        $query = "SELECT * FROM user WHERE First_Name LIKE '%".$_POST["query"]."%' OR Surname LIKE '%".$_POST["query"]."%'  ";
         
        $result = mysqli_query($con, $query);  
        $output = '<ul class="list-unstyled">';  
        
        if(mysqli_num_rows($result) > 0){  
            while($row = mysqli_fetch_array($result)){  
                $output .= '<li>'.$row["First_Name"]. ' '.$row["Surname"].'</li>';  
                
            }  
        }else{  
            $output .= '<li>User Not Found</li>';  
        }  
    
    $output .= '</ul>';  
    echo $output;  
    } 
?>