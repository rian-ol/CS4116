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
         
         <div class="container-fluid vacancyCard justify-content-center">
            
                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                  <img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
            <h1>Kate Riley</h1>
            <h2>Senior Software Developer</h2>
            <p><strong>Qualifications:</strong></p>
            <ul>
                <li>Bachelor's degree in Computer Science</li>
                <li>8 years of experience in software development</li>
                <li>Strong understanding of software design principles and patterns</li>
                <li>Proficient in Java, Python, C++</li>
                <li>Experience with web application development (e.g., HTML, CSS, JavaScript)</li>
                <li>Experience with database technologies (e.g., SQL, MySQL, MongoDB)</li>
                <li>Excellent problem-solving and debugging skills</li>
                <li>Strong verbal and written communication skills</li>
                <li>Ability to work collaboratively in a team environment</li>
            </ul>
            <p><strong>Location:</strong> Limerick, Ireland</p>
            <p><strong>Contact:</strong>kateriley@gmail.com</p>
        </div>
</body>
</html>
