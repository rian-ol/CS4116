<?php

    if(!isset($_COOKIE['user'])){
         header("location:index.php"); 
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
    $skill = $row["skill_name"];
    $company = $rowU['compCreated'];
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
          <?php 
          if($company == '0'){ ?>
          <div class="mt-5 text-center"><a href="createCompany.php" text-color ="white"><button class="btn btn-primary profile-button " class="button" type="submit" >Create a Company</button></a></div>
          <?php
          }else{
            ?>
          <div class="mt-5 text-center"><a href="myCompany.php" text-color ="white"><button class="btn btn-primary profile-button " class="button" type="submit" >My company</button></a></div>
            <?php
          }
          ?>
         <form action="editprofile.php" method="post">
          <div class="container-fluid profileCard">
            <div class="row">
              <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                  <img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                  <span class="font-weight-bold"><?php echo$fName ?> </span><span class="text-black-50"><?php echo$email ?></span><span> </span></div>
              </div>
              <div class="col-md-8 border-right">
                <div class="p-3 py-5">
                  <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">My Profile</h4>
                  </div>
                  <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">First Name:</label><input type="text"  class="form-control" value="<?php echo$fName; ?>" name="First_Name" readonly></div>
                    <div class="col-md-6"><label class="labels">Surname:</label><input type="text" class="form-control" value="<?php echo$sName; ?>" name="Surname"  readonly></div>
                  </div>
                  <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Age:</label><input type="text" class="form-control" value="<?php echo$age; ?>" name="Age" readonly></div>
                    <div class="col-md-12"><label class="labels">Gender:</label><input type="text" class="form-control"  value="<?php echo$gender; ?>" name="Gender" readonly></div>
                  </div>
                  <div class="row mt-3">
                    <div class="col-md-6"><label class="labels">Main Skill:</label><input type="text" class="form-control" value="<?php echo$skill; ?>" name="" readonly></div>
                    <div class="col-md-6"><label class="labels">Location:</label><input type="text" class="form-control" value="<?php echo$location; ?>" name="Location"  readonly></div>
                  </div>
              </div>
                      
            </div>
            
          </div>
      
         </form>
         <div class="mt-5 text-center"><a href="editprofile.php" text-color ="white"><button class="btn btn-primary profile-button " class="button" type="submit">Edit Profile</button></a></div>
      </div>
  </div>
</body>
