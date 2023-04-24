<?php

  if(!isset($_COOKIE['user']) && $_COOKIE['user'] != 'admin'){
    header('Location:index.php');
    exit;
  }



 

  include('connection.php');
    $sql = "SELECT u.User_id, u.First_Name, u.Surname, p.Age, p.Gender, p.Location, p.skill_name FROM user u Join profile p ON u.User_id = p.User_id;";  
    $result = mysqli_query($con, $sql);  

    $Connects = array();
    while ($row = mysqli_fetch_assoc($result)) {
      if ($row['User_id'] == $_COOKIE['user']) {
        continue;
      }
      $key = $row['First_Name'] . $row ['Surname'];
      if(!array_key_exists($key, $Connects)){
        $Connects[$key] = array(
          'User_id' => $row['User_id'],
          'First_Name'=> $row['First_Name'],
          'Surname'=> $row['Surname'],
          'Age'=> $row['Age'],
          'Gender'=> $row['Gender'],
          'Location'=> $row['Location'],
          'skill_name'=> $row['skill_name'],
        );
      }
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
             <img src="DevLink.jpg" height="40" alt="DevLink">
        </nav>
           <div class="topnav">
           <a class="nav-link "href="Avacancies.php">Vacancies</a>
             <a class="nav-link" href="Afeed.php">Feed</a>
             <a class="nav-link" href="AUsers.php">Users</a>
             <a class="nav-link" href="Acompanies.php">Companies</a>
             <form class="d-flex search" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
           </div>
         </div>

        <?php
        $int = 0;
        ?>
          <div class="limit4"></div>
        <?php
        foreach ($Connects as $connect) {
          if ($int % 4 == 0) {
            ?>
            <div class="limit4"></div>
              <?php
          }
          ?>
            <div class="pot-connect">  
              <h2> <?php echo $connect['First_Name']. " " . $connect['Surname']; ?></h2>
              <p>Age: <?php echo $connect['Age']; ?></p>
              <p>Gender: <?php echo $connect['Gender']; ?></p>
              <p>Location: <?php echo $connect['Location']; ?></p>
              <p>Skill: <?php echo $connect['skill_name']; ?></p>
              <form action="deleteUser.php">
              <div ><!--<a href="connectUser.php"> --><button class="btn btn-primary profile-button " class="button" name="user_id" type="submit" value="<?php echo $connect['User_id']; ?>">Delete User</button><!--</a>--></div>  
              </form>
            </div>
          </div>
                  <?php
                  $int++;
                }
                  ?>




</body>
</html>