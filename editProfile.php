<?php

  if(!isset($_COOKIE['user'])){
    header('Location:index.php');
    exit;
  }
  $userid = $_COOKIE['user'];
  include('connection.php');
  $sql = "select * from profile where User_id = '$userid'";  
  $result = mysqli_query($con, $sql);  
  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);


  include('connection.php');
  $sql = "select * from user where User_id = '$userid'";  
  $resultU = mysqli_query($con, $sql);  
  $rowU = mysqli_fetch_array($resultU, MYSQLI_ASSOC);



  $fName = $rowU["First_Name"];
  $sName = $rowU["Surname"];
  $email = $rowU["Email"];
  $age = $row["Age"];
  $location = $row["Location"];
  $gender = $row["Gender"];
  $usersSkill = $row["skill_name"];

  if ($location == "Limerick") {
    $firstL = "Limerick";
    $secondL = "Galway";
    $thirdL = "Dublin";
    $fourthL = "Cork";
  }elseif ($location =="Galway") {
    $firstL = "Galway";
    $secondL = "Limerick";
    $thirdL = "Dublin";
    $fourthL = "Cork";
  }elseif ($location =="Cork") {
    $firstL = "Cork";
    $secondL = "Limerick";
    $thirdL = "Dublin";
    $fourthL = "Galway";
  }elseif ($location =="Dublin") {
    $firstL = "Dublin";
    $secondL = "Limerick";
    $thirdL = "Cork";
    $fourthL = "Galway";
  }else{
    $firstL = "Limerick";
    $secondL = "Galway";
    $thirdL = "Dublin";
    $fourthL = "Cork";
  }

  if ($gender == "Male") {
    $firstG = "Male";
    $secondG = "Female";
    $thirdG = "Other";
  }elseif ($gender =="Female") {
    $firstG = "Female";
    $secondG = "Male";
    $thirdG = "Other";
  }elseif ($gender =="Other") {
    $firstG = "Other";
    $secondG = "Male";
    $thirdG = "Female";
  }else{
    $firstG = "Male";
    $secondG = "Female";
    $thirdG = "Other";
  }


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
             <a class="nav-link" href="index.php">Log out</a>
             <form class="d-flex search" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
           </div>
         </div>
         <form action="editProfileMethod.php" method="post">
         <div class="container-fluid profileCard">
          <div class="row">
              <div class="col-md-3 border-right">
                  <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                    <img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                    <span class="font-weight-bold" ></span><?php echo$fName; ?><span class="text-black-50" ><?php echo$email; ?></span><span> </span></div>
              </div>
              <div class="col-md-8 border-right">
                  <div class="p-3 py-5">
                      <div class="d-flex justify-content-between align-items-center mb-3">
                          <h4 class="text-right">My Profile</h4>
                      </div>
                      <div class="row mt-2">
                          <div class="col-md-6"><label class="labels">First Name:</label><input type="text" class="form-control" value = "<?php echo$fName; ?>" name="First_Name"></div>
                          <div class="col-md-6"><label class="labels">Surname:</label><input type="text" class="form-control" name="Surname" value = "<?php echo$sName; ?>"></div>
                      </div>
                      <div class="row mt-3">
                          <div class="col-md-12"><label class="labels">Age:</label><input type="text" class="form-control" value = "<?php echo$age; ?>" name="Age"></div>
                                                <div class="row mt-3">
                      <div class="col-md-12"><label class="labels">Gender:</label></div>
                           <method="post" placeholder="Gender">
                           
                          <select name="Gender">
                          <option name="Gender" value = "<?php echo$firstG; ?>"><?php echo$firstG; ?></option>
                            <option name="Gender" value = "<?php echo$secondG; ?>"><?php echo$secondG; ?></option>
                            <option name="Gender" value = "<?php echo$thirdG; ?>"><?php echo$thirdG; ?></option>
                          </select>
                        </form>
                        <div class="row mt-3">
                          <div class="col-md-12"><label class="labels">Location:</label></div>
                          <method="post" placeholder="Location">
                                                  
                          <select name="Location">
                          <option name="Location" value = "<?php echo$firstL; ?>"><?php echo$firstL; ?></option>
                            <option name="Location" value = "<?php echo$secondL; ?>"><?php echo$secondL; ?></option>
                            <option name="Location" value = "<?php echo$thirdL; ?>"><?php echo$thirdL; ?></option>
                            <option name="Location" value = "<?php echo$fourthL; ?>"><?php echo$fourthL; ?></option>
                          </select>
                        </form>
                      
                        <br>
                  
                  
                         <div class="row mt-3">
                         <?php
                    include("connection.php");
                    include("dropdown.php");
                    ?>
                    <div class="col-md-12"><label class="labels">Main Skill:</label>
                    <method="post" placeholder="Main Skill">
                    <select name="skill_name" id="skillSelect">
                      <option value="<?php echo $usersSkill; ?>" id="<?php echo $usersSkill; ?>"><?php echo $usersSkill; ?> </option>
                      <?php 
                      $skillNum =2;
                      foreach ($options as $option) {
                        if ($option["skill_name"] != $usersSkill) {
                          
                        
                      ?>
                        
                        <option value="<?php echo $option["skill_name"]; ?>" id="<?php echo $option["skill_name"]; ?>"><?php echo $option["skill_name"]; ?> </option>
                        <?php 
                        $skillNum++;
                      }
                        }
                      ?>
                    </select>
                  </div>
                      <div class="mt-5 text-center"><button class="btn btn-primary profile-button" class="button" type="submit">Save Profile</button></div>
                  </div>
              </div>
              </div>
          </div>
      </div>
      </div>
      </div>
</body>