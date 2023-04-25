<?php

    (include "connection.php");

   


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
    <div class="">
        <div class="d-flex  ">
            <img src="DevLink.jpg" height="75" alt="DevLink">
        </div>
        <div class="d-flex  justify-content-around">
        <form action="createNewProfile.php" method="post">
         <div class="container-fluid profileCard">
          <div class="row">
              <div class="col-md-3 border-right">
                  <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                    <img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                    <span class="font-weight-bold" ></span><span class="text-black-50" ></span><span> </span></div>
              </div>
              <div class="col-md-8 border-right">
                  <div class="p-3 py-5">
                      <div class="d-flex justify-content-between align-items-center mb-3">
                          <h4 class="text-right">My Profile</h4>
                      </div>
                      <div class="row mt-2">
                          <div class="col-md-6"><label class="labels">First Name:</label><input type="text" class="form-control"  name="First_Name" required></div>
                          <div class="col-md-6"><label class="labels">Surname:</label><input type="text" class="form-control" name="Surname" required></div>
                      </div>
                      <div class="row mt-3">
                          <div class="col-md-3"><label class="labels">Age:</label><input type="number" style="-webkit-appearance:none;" min="18" max="55" class="form-control"  name="Age" required></div>
                                                <div class="row mt-3">
                      <div class="col-md-12"><label class="labels">Gender:</label></div>
                           <method="post" placeholder="Gender">
                           
                          <select name="Gender">
                          <option name="Gender" value = "Male">Male</option>
                            <option name="Gender" value = "Female">Female</option>
                            <option name="Gender" value = "Other">Other</option>
                          </select>
                        </form>
                        <div class="row mt-3">
                          <div class="col-md-12"><label class="labels">Location:</label></div>
                          <method="post" placeholder="Location">
                                                  
                          <select name="Location">
                          <option name="Location" value = "Limerick">Limerick</option>
                            <option name="Location" value = "Galway">Galway</option>
                            <option name="Location" value = "Cork">Cork</option>
                            <option name="Location" value = "Dublin">Dublin</option>
                          </select>
                        </form>
                      
                        <br>
                  
                  
                        <div class="row mt-3">
                                           <?php
                        include("connection.php");
                        include("dropdown.php");
                        ?>
                        <label class="labels">Main skill:</label>
                        <select name="skill_name">
                        <?php 
                        foreach ($options as $option) {
                        ?>
                            <option><?php echo $option["skill_name"]; ?> </option>
                                               <?php
                        }
                      ?>
                    </select>
                  </div>
                      <div class="mt-5 text-center"><button class="btn btn-primary profile-button" class="button" type="submit">Save Details</button></div>
                  </div>
              </div>
              </div>
          </div>
      </div>
      </div>
      </div>
</body>
        </div>
    </div>
</body>
