<?php

  if(!isset($_COOKIE['user']) && $_COOKIE['user'] != 'admin'){
    header('Location:index.php');
    exit;
  }

  include('connection.php');
  $sql = "SELECT v.Vacancy_id, v.Vacancy_name, v.Vacancy_description, v.Location, v.isDeleted, o.organisation_name FROM vacancy v Join organisation o ON v.Organisation_id = o.organisation_id;";  
  $result = mysqli_query($con, $sql);  

  $vacancies = array();
  while ($row = mysqli_fetch_assoc($result)) {
    $key = $row['Vacancy_id'];
    if(!array_key_exists($key, $vacancies)){
      $vacancies[$key] = array(
        'Vacancy_id' => $row['Vacancy_id'],
        'Vacancy_name'=> $row['Vacancy_name'],
        'Vacancy_description'=> $row['Vacancy_description'],
        'Location'=> $row['Location'],
        'isDeleted'=> $row['isDeleted'],
        'organisation_name' => $row['organisation_name']

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
        foreach ($vacancies as $vacancy) {
          if ($int % 4 == 0) {
            ?>
            <div class="limit4"></div>
              <?php
          }
          ?>
            <div class="pot-connect">  
                
                <h2> <?php echo $vacancy['organisation_name']; ?></h2>
                
                <p>Vacancy name: <?php echo $vacancy['Vacancy_name']; ?></p>
                <p>Vacancy description: <?php echo $vacancy['Vacancy_description']; ?></p>
                <p>Location: <?php echo $vacancy['Location']; ?></p>
               <?php
               if ($vacancy['isDeleted'] == 0) {

               ?>
                <form action="deleteVacancy.php">
                    <div ><button class="btn btn-primary profile-button " style="float:right;" class="button" name="Vacancy_id" type="submit" value="<?php echo $vacancy['Vacancy_id']; ?>">Delete</button><!--</a>--></div>  
                    </form>
               <?php
                }else{
                  ?>
                   <form action="unDeleteVacancy.php">
                    <div ><button class="btn btn-primary profile-button " style="float:right;" class="button" name="Vacancy_id" type="submit" value="<?php echo $vacancy['Vacancy_id']; ?>">unDelete</button><!--</a>--></div>  
                    </form>
                    <?php
                }
                  ?>
            </div>
          </div>
                  <?php
                  $int++;
                }
                  ?>



</body>
</html>