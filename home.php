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
           <form class="d-flex search" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
         </div>
       </div>

    <div>
      <a style="text-decoration: none" href="vacancies.php">
         <div class="homeCards jCard">
            <h2>Vacancies</h2>
            <p>Find your next job and advance your career with job listings tailored to your skills and interests.</p>
         </div>
      </a>
         <a style="text-decoration: none" href="feed.php">
       <div class="homeCards mnCard" style="margin-left: auto;">
          <h2>Feed</h2>
          <p>Grow your professional network by connecting with other professionals and staying up-to-date with their careers.</p>
       </div>
    </a>
    <a style="text-decoration: none" href="connections.php">
       <div class="homeCards mCard">
          <h2>Connections</h2>
          <p>Stay connected with your professional network and communicate with ease through messaging.</p>
       </div>
    </a>
    <a style="text-decoration: none" href="myProfile.php">
       <div class="homeCards mpCard" style="margin-left: auto;">
          <h2>My Profile</h2>
          <p>Showcase your skills, experience, and education to potential employers and connect with other professionals.</p>
       </div>
    </a>
    </div>
</body>
</html>
