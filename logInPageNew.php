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
           <a class="navbar-brand" href="home.html">
             <img src="DevLink.jpg" height="40" alt="DevLink">
           </a>
        </nav>
           <div class="topnav">
             <a class="nav-link "href="vacancies.html">Vacancies</a>
             <a class="nav-link" href="feed.html">Feed</a>
             <a class="nav-link" href="connections.html">Connections</a>
             <a class="nav-link" href="myProfile.html">My Profile</a>
             <form class="d-flex search" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
           </div>
         </div>

         <div class="container-fluid profileCard">
          <div class="row">
              <div class="col-md-8 border-right">
                  <div class="p-3 py-5">
                      <div class="d-flex justify-content-between align-items-center mb-3">
                          <h4 class="text-right">Log In</h4>
                      </div>
                      <form action="logIn.php" method="post">
                      <div class="row mt-2">
                          <div class="col-md-6"><label class="labels">Email</label><input type="text" class="form-control" placeholder="Email" name="Email"></div>
                      </div>
                      <div class="row mt-3">
                          <div class="col-md-6"><label class="labels">Password</label><input type="Password" class="form-control" placeholder="Password" name="Password"></div>
                  </div>
                      <div class="mt-5 text-center"><button class="btn btn-primary profile-button" class="button" type="submit">Log In</button></div>
                      </form>
                  </div>
              </div>
              </div>
          </div>
      </div>
      </div>
      </div>
</body>