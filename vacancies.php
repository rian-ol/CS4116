<?php

  if(!isset($_COOKIE['user'])){
    header('Location:index.php');
    exit;
  }

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="DevLink.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>  
    $(document).ready(function(){  
        $('#skill').keyup(function(){  
            var query = $(this).val();  
            if(query != '')  
            {  
                $.ajax({  
                    url:"searchBySkillName.php",  
                    method:"POST",  
                    data:{query:query},  
                    success:function(data)  
                    {  
                        $('#skillList').fadeIn();  
                        $('#skillList').html(data);  
                    }  
                });  
            }  
        });  
    });  
</script>
<script>  
    $(document).ready(function(){  
        $('#user').keyup(function(){  
            var query = $(this).val();  
            if(query != '')  
            {  
                $.ajax({  
                    url:"searchByName.php",  
                    method:"POST",  
                    data:{query:query},  
                    success:function(data)  
                    {  
                        
                        $('#userList').html(data);  
                    }  
                });  
            }  
        });  
    });  
</script>
<script>  
    $(document).ready(function(){  
        $('#vacancy').keyup(function(){  
            var query = $(this).val();  
            if(query != '')  
            {  
                $.ajax({  
                    url:"searchByVacancyName.php",  
                    method:"POST",  
                    data:{query:query},  
                    success:function(data)  
                    {  
                        
                        $('#vacancyList').html(data);  
                    }  
                });  
            }  
        });  
    });  
</script>
</head>
<body>
    <div class="main container-fluid">
        <nav class="navbar navbar-fixed-top">
           <a class="navbar-brand" href="home.php">
             <img src="DevLink.jpg" height="40" alt="DevLink">
           </a>
        </nav>
           <div class="topnav">
             <a class="nav-link "href="vacancies.php">Vacancies</a>
             <a class="nav-link" href="feed.php">Feed</a>
             <a class="nav-link" href="connections.php">Connections</a>
             <a class="nav-link" href="myProfile.php">My Profile</a>
             <a class="nav-link" href="index.php">Log out</a>
           </div>
         </div>

    <div class="row">
        <div class="col-8"><form action="createVacancyMethod.php" method="post">
            <div class="col-6 createAndSearch">
                   <h2>Create Vacancy</h2>
                   <table class="table">
                    <tr>
                        <th scope="row">Vacancy Name:</th>
                        <td><input type="Vacancy_name" name="Vacancy_name" id="Vacancy_name" placeholder="Enter Vacancy Name" /></td>
                    </tr>
                    <tr>
                        <th scope="row">Vacancy Description:</th>
                        <td><input type="Vacancy_description" name="Vacancy_description" id="Vacancy_description" placeholder="Enter Vacancy Description" /></td>
                    </tr>
                                        <tr>
                    <?php
include("connection.php");
include("dropdown.php");
?>
<select name="skill_name">
   <option>Select Skill required</option>
  <?php 
  foreach ($options as $option) {
  ?>
    <option><?php echo $option["skill_name"]; ?> </option>
    <?php 
    }
   ?>
</select>
                    </tr>
                    <tr>
                        <th scope="row">Experience:</th>
                        <td><input type="Experienced_required" name="Experienced_required" id="Experienced_required" placeholder="Enter Experience recommended (in years)" /></td>
                    </tr>
                    <tr>
                        <th scope="row">Location:</th>
                        <td><input type="Location" name="Location" id="Location" placeholder="Enter Location" /></td>
                    </tr>
                   </table>
                   <input class="button" type="submit"
                     name="login" value="Create Vacancy">
             </a></div>
            </form></div>
        <div class="col-4">
            <div class="col-6 createAndSearch">
            <form action="searchBySkillName.php" method="post">
                <h2>Search Vacancy Based on Skill</h2>
                <input type="text" name="skill" id="skill" placeholder="Enter Programming skill" />  
                <div id="skillList"></div>  
                
         </form>
          </div>
          <div class="col-6 createAndSearch">
            <form action="myProfile.php" method="post">
                <h2>Search Users Based on Name</h2>
                <input type="text" name="user" id="user" placeholder="Enter Name" />  
                <div id="userList"></div> 
          </form>
          </div></div>
      </div>
          </div>
          <div class="col-6 createAndSearch">
            <form action="searchByVacancyName.php" method="post">
                <h2>Search for Vacancies</h2>
                <input type="text" name="vacancy" id="vacancy" placeholder="Enter Name" />  
                <div id="vacancyList"></div> 
          </form>
          
      </div>
      <div class="row justify-content-center">
        <div class="col-4"><a style="text-decoration: none" href="vacancies.html">
            <div class="vacancieCards">
               <h2>Job Example 1</h2>
               
               <table class="table">
                <tr>
                    <th scope="row">Location:</th>
                    <td>"Limerick"</td>
                </tr>
                <tr>
                    <th scope="row">Skills Required:</th>
                    <td>"C++"</td>
                </tr>
                <tr>
                    <th scope="row">Experience:</th>
                    <td>"3 years"</td>
                </tr>
               </table>
            </div>
         </a></div>
        <div class="col-4"><a style="text-decoration: none" >
            <div class="vacancieCards">
               <h2>Job Example 2</h2>
               <table class="table">
                                        <tr>
                    <?php
include("connection.php");
include("vacancyNames.php");
?>
<select name="Vacancy_name">
   <option>Select Skill required</option>
  <?php 
  foreach ($options as $option) {
  ?>
    <option><?php echo $option["Vacancy_name"]; ?> </option>
    <?php 
    }
   ?>
</select>
                    </tr>
                <tr>
                    <th scope="row">Skills Required:</th>
                    <td>"C++"</td>
                </tr>
                <tr>
                    <th scope="row">Experience:</th>
                    <td>"3 years"</td>
                </tr>
               </table>
            </div>
         </a></div>

         <div class="w-100"></div>
      
        <div class="col-4"><a style="text-decoration: none" href="vacancies.html">
            <div class="vacancieCards">
               <h2>Job Example 3</h2>
               <table class="table">
                <tr>
                    <th scope="row">Location:</th>
                    <td>"Limerick"</td>
                </tr>
                <tr>
                    <th scope="row">Skills Required:</th>
                    <td>"C++"</td>
                </tr>
                <tr>
                    <th scope="row">Experience:</th>
                    <td>"3 years"</td>
                </tr>
               </table>
            </div>
         </a></div>
        <div class="col-4"><a style="text-decoration: none" href="vacancies.html">
            <div class="vacancieCards">
               <h2>Job Example 4</h2>
               <table class="table">
                <tr>
                    <th scope="row">Location:</th>
                    <td>"Limerick"</td>
                </tr>
                <tr>
                    <th scope="row">Skills Required:</th>
                    <td>"C++"</td>
                </tr>
                <tr>
                    <th scope="row">Experience:</th>
                    <td>"3 years"</td>
                </tr>
               </table>
            </div>
         </a></div>

         <div class="w-100"></div>

         <div class="col-4"><a style="text-decoration: none" href="vacancies.html">
            <div class="vacancieCards">
               <h2>Job Example 5</h2>
               <table class="table">
                <tr>
                    <th scope="row">Location:</th>
                    <td>"Limerick"</td>
                </tr>
                <tr>
                    <th scope="row">Skills Required:</th>
                    <td>"C++"</td>
                </tr>
                <tr>
                    <th scope="row">Experience:</th>
                    <td>"3 years"</td>
                </tr>
               </table>
            </div>
         </a></div>

         <div class="col-4"><a style="text-decoration: none" href="vacancies.html">
            <div class="vacancieCards">
               <h2>Job Example 6</h2>
               <table class="table">
                <tr>
                    <th scope="row">Location:</th>
                    <td>"Limerick"</td>
                </tr>
                <tr>
                    <th scope="row">Skills Required:</th>
                    <td>"C++"</td>
                </tr>
                <tr>
                    <th scope="row">Experience:</th>
                    <td>"3 years"</td>
                </tr>
               </table>
            </div>
         </a></div>
      </div>

</body>
</html>
