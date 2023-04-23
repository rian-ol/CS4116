<?php

  if(!isset($_COOKIE['user'])){
    header('Location:index.php');
    exit;
  }elseif ($_COOKIE['user'] =='admin') {
    header('Location:Afeed.php');
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
         <div class="container-fluid feedCard">
          <div class="border border-left border-right px-0">
            <div>
              <div class="card shadow-0">
                <div class="card-body border-bottom pb-2">
                  <div class="d-flex">
                    <div class="d-flex align-items-center w-100 ps-3">
                      <div class="w-100">
                        <input type="text" id="form143" class="form-control form-status border-0 py-1 px-0"
                          placeholder="What's happening" />
                      </div>
                    </div>
                  </div>
                  <div class="d-flex justify-content-between">
                    <ul class="list-unstyled d-flex flex-row ps-3 pt-3" style="margin-left: 50px;">
                      <li>
                        <a href=""><i class="far fa-image pe-2"></i></a>
                      </li>
                      <li>
                        <a href=""><i class="fas fa-photo-video px-2"></i></a>
                      </li>
                      <li>
                        <a href=""><i class="fas fa-chart-bar px-2"></i></a>
                      </li>
                      <li>
                        <a href=""><i class="far fa-smile px-2"></i></a>
                      </li>
                      <li>
                        <a href=""><i class="far fa-calendar-check px-2"></i></a>
                      </li>
                    </ul>
                    <div class="d-flex align-items-center">
                      <button type="button" class="btn btn-primary btn-rounded">Post</button>
                    </div>
                  </div>
                </div>
              </div>
              <div>
                <div class="d-flex p-3 border-bottom">
                  <div class="d-flex w-100 ps-3">
                    <div>
                      <a href="feedProfile.php">
                        <h6 class="text-body">
                          Kate Riley
                          <span class="small text-muted font-weight-normal">@kateriley</span>
                          <span class="small text-muted font-weight-normal"> • </span>
                          <span class="small text-muted font-weight-normal">2h</span>
                          <span><i class="fas fa-angle-down float-end"></i></span>
                        </h6>
                      </a>
                      <p style="line-height: 1.2;">
                        Some random text absolutely random <a href="">#mysterylink</a> more text.
                        Text text texty text. Text text texty text Text text texty text. Text text texty text
                      </p>
                    </div>
                  </div>
                </div>
                <div class="d-flex p-3 border-bottom">
                  <div class="d-flex w-100 ps-3">
                    <div>
                      <a href="feedProfile.php">
                        <h6 class="text-body">
                          Kate Riley
                          <span class="small text-muted font-weight-normal">@kateriley</span>
                          <span class="small text-muted font-weight-normal"> • </span>
                          <span class="small text-muted font-weight-normal">3h</span>
                          <span><i class="fas fa-angle-down float-end"></i></span>
                        </h6>
                      </a>
                      <p style="line-height: 1.2;">
                        Look at this!!
                      </p>
                      <div class="card border mb-3 shadow-0" style="max-width: 540px;">
                        <div class="row g-0">
                          <div class="col-md-3">
                          </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="d-flex p-3 border-bottom">
                  <div class="d-flex w-100 ps-3">
                    <div>
                      <a href="feedProfile.php">
                        <h6 class="text-body">
                          Bob Marley
                          <span class="small text-muted font-weight-normal">@bobmarley</span>
                          <span class="small text-muted font-weight-normal"> • </span>
                          <span class="small text-muted font-weight-normal">5h</span>
                          <span><i class="fas fa-angle-down float-end"></i></span>
                        </h6>
                      </a>
                      <p style="line-height: 1.2;">
                        Some random text absolutely random <a href="">#mysterylink</a> more text.
                        Text text texty text. Text text texty text Text text texty text. Text text texty text
                      </p>
                      <div class="card border mb-3 shadow-0" style="max-width: 540px;">
                        <div class="row g-0">
                          <div class="col-md-3">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="d-flex p-3 border-bottom mb-5">
                  <div class="d-flex w-100 ps-3">
                    <div>
                      <a href="feedProfile.php">
                        <h6 class="text-body">
                          Mark Twain
                          <span class="small text-muted font-weight-normal">@marktawin</span>
                          <span class="small text-muted font-weight-normal"> • </span>
                          <span class="small text-muted font-weight-normal">10h</span>
                          <span><i class="fas fa-angle-down float-end"></i></span>
                        </h6>
                      </a>
                      <p style="line-height: 1.2;">
                        Some random text absolutely random <a href="">#mysterylink</a> more text.
                        Text text texty text. Text text texty text Text text texty text. Text text texty text and heres a video.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
</body>
</html>
