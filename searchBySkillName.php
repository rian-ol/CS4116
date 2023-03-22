<?php
include('connection.php');   

    if(isset($_POST["query"])){  
        $output = '';  
        $query = "SELECT * FROM skills INNER JOIN Vacancy ON skills.skill_id = Vacancy.skill_id WHERE skill_name LIKE '%".$_POST["query"]."%'";
         
        $result = mysqli_query($con, $query);  
        $output = '<ul class="list-unstyled">';  
        
        if(mysqli_num_rows($result) > 0){  
            while($row = mysqli_fetch_array($result)){  
                $output .= '<li>'.$row["Vacancy_name"] .'</li>';  
                
            }  
        }else{  
            $output .= '<li>User Not Found</li>';  
        }  
    
    $output .= '</ul>';  
    echo $output;  
    } 
?>
