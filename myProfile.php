<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="DevLink.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  
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
                    <span class="font-weight-bold">Name</span><span class="text-black-50">email@gmail.com</span><span> </span></div>
              </div>
              <div class="col-md-8 border-right">
                  <div class="p-3 py-5">
                      <div class="d-flex justify-content-between align-items-center mb-3">
                          <h4 class="text-right">My Profile</h4>
                      </div>
                      <div class="row mt-2">
                          <div class="col-md-6"><label class="labels">First Name</label><input type="text" class="form-control" placeholder="first name" name="First_Name"></div>
                          <div class="col-md-6"><label class="labels">Surname</label><input type="text" class="form-control" name="Surname" placeholder="surname"></div>
                      </div>
                      <div class="row mt-3">
                          <div class="col-md-12"><label class="labels">Age</label><input type="text" class="form-control" placeholder="enter Age" name="Age"></div>
                          <div class="col-md-12"><label class="labels">Gender</label><input type="text" class="form-control" placeholder="enter Gender" name="Gender"></div>
                          <div class="col-md-12"><label class="labels">Bio</label><input type="text" class="form-control" placeholder="Enter Bio" name="Bio"></div>
                      </div>
                      <div class="row mt-3">
                          <div class="col-md-6"><label class="labels">Skills</label><input type="text" class="form-control" placeholder="Skills" name=""></div>
                          <div class="col-md-6"><label class="labels">Location</label><input type="text" class="form-control" name="Location" placeholder="Location"></div>
                      </div>
                      <div class="row mt-3">
                        <div class="col-md-12"><label class="labels">Experience</label><input type="text" class="form-control" placeholder="experience" name="experience"></div> <br>
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
