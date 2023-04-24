<?php

  if(!isset($_COOKIE['user']) && $_COOKIE['user'] != 'admin'){
    header('Location:index.php');
    exit;
  }



 

  include('connection.php');
    $sql = "SELECT u.User_id, u.First_Name, u.Surname, o.organisation_id, o.organisation_name, o.organisation_description, o.isAuthourised FROM user u Join organisation o ON u.User_id = o.User_id;";  
    $result = mysqli_query($con, $sql);  

    $companies = array();
    while ($row = mysqli_fetch_assoc($result)) {
      $key = $row['organisation_id'];
      if(!array_key_exists($key, $companies)){
        $companies[$key] = array(
          'organisation_id' => $row['organisation_id'],
          'First_Name'=> $row['First_Name'],
          'Surname'=> $row['Surname'],
          'organisation_name'=> $row['organisation_name'],
          'organisation_description'=> $row['organisation_description'],
          'isAuthourised'=> $row['isAuthourised']
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
        foreach ($companies as $company) {
          if ($int % 4 == 0) {
            ?>
            <div class="limit4"></div>
              <?php
          }
          ?>
            <div class="pot-connect">  
                
                <h2> <?php echo $company['organisation_name']; ?></h2>
                
                <p>Company name: <?php echo $company['organisation_name']; ?></p>
                <p>Company description: <?php echo $company['organisation_name']; ?></p>
                <p>Company creator: <?php echo $company['First_Name'] . " " . $company['Surname']; ?></p>
                <?php
                    if($company['isAuthourised'] == 0){?>
                        <form action="autoriseCompany.php">
                        <div ><button class="btn btn-primary profile-button " style="float:left;" name="organisation_id" type="submit" value="<?php echo $company['organisation_id']; ?>">Authorise</button><!--</a>--></div>  
                        </form>
                <?php
                    }
                ?>
                    <form action="deleteCompany.php">
                    <div ><button class="btn btn-primary profile-button " style="float:right;" class="button" name="organisation_id" type="submit" value="<?php echo $company['organisation_id']; ?>">Delete</button><!--</a>--></div>  
                    </form>
            </div>
          </div>
                  <?php
                  $int++;
                }
                  ?>




</body>
</html>