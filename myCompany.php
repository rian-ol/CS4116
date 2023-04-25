<?php

    if(!isset($_COOKIE['user'])){
         header("location:index.php"); 
    }
    $userid = $_COOKIE['user'];
    include('connection.php');
    $sql = "select * from organisation where User_id = '$userid'";  
    $result = mysqli_query($con, $sql);  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);


    $sql = "select * from user where User_id = '$userid'";  
    $resultU = mysqli_query($con, $sql);  
    $rowU = mysqli_fetch_array($resultU, MYSQLI_ASSOC);



    $fName = $rowU["First_Name"];
    $sName = $rowU["Surname"];
    $organisation_name = $row["organisation_name"];
    $organisation_description = $row["organisation_description"];
    $isDeleted = $row["isDeleted"];
    $isAuthourised = $row["isAuthourised"];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="DevLink.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  
</head>
<body>
    <div class="main container-fluid d-flex justify-content-around">
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
           </div>
         </div>
         <form action="myProfile.php" method="post">
          <div class="container-fluid profileCard">
            <?php
            if($isDeleted == '1'){ ?>

                <h1>THIS COMPANY HAS BEEN BANNED, PLEASE CONTACT AN ADMIN</h1>
                    <?php
            }else if($isAuthourised == '0'){ ?> 
                <h1>THIS  COMPANY  HAS  YET  TO  BE  AUTHOURISED,  PLEASE  WAIT  FOR  ASSISSTANCE  FROM  AN  ADMIN</h1>
               <?php
                }else{
                    ?>
            <div class="row">
              <div class="col-md-8 border-right">
                <div class="p-3 py-5">
                
            
                   
                        
                  <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right"><?php echo$organisation_name;?></h4>
                  </div>
                  <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">Description:</label><input type="text"  class="form-control" value="<?php echo$organisation_name; ?>" name="ororganisation_name" readonly></div>
                   

                </div>
              </div>
                      
            </div>
              
            
          </div>
      
         </form>
         
            <?php
                    }?>
         <?php
            ?>
         <div class="mt-5 text-center"><button class="btn btn-primary profile-button " class="button" type="submit">My Profile</button></div>

      </div>
      <div class="col-8"><form action="createVacancyMethod.php" method="post">
            <div class="col-6 createAndSearch">
                   <h2>Create Vacancy</h2>
                   <table class="table">
                    <tr>
                        <th scope="row">Vacancy Name:</th>
                        <td><input type="Vacancy_name" name="Vacancy_name" id="Vacancy_name"  /></td>
                    </tr>
                    <tr>
                        <th scope="row">Vacancy Description:</th>
                        <td><input type="Vacancy_description" name="Vacancy_description" id="Vacancy_description" /></td>
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
              <!-- <th scope="row">Experience:</th>
              <td>    -->
                <!-- <input type="number" min="0" max="20" name="Experience_required" id="Experienced_required"required> -->
            <tr>
                <th scope="row">Location:</th>
                <td>   <select name="Location">
              <option name="Location">Limerick</option>
                <option name="Location">Galway</option>
                <option name="Location">Dublin</option>
                <option name="Location">Cork</option>
              </select></td>
                                </tr>
                              </table>
                              <input class="button" type="submit"
                                name="login" value="Create Vacancy">
                        </a></div>
                        </form></div>
  </div>
</body>
