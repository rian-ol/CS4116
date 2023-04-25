<?php

if(!isset($_COOKIE['user'])){
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
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>  
    $(document).ready(function(){  
        $('#skill').keyup(function(){  
            var query = $(this).val();  
            if(query != '')  
            {  
                $.ajax({  
                    url:"searchBySkillName.php",  
                    method:"POST",  
                    data:{query:query},  
                    success:function(data)  
                    {  
                        $('#skillList').fadeIn();  
                        $('#skillList').html(data);  
                    }  
                });  
            }  
        });  
    });  
</script>
<script>  
    $(document).ready(function(){  
        $('#user').keyup(function(){  
            var query = $(this).val();  
            if(query != '')  
            {  
                $.ajax({  
                    url:"searchByName.php",  
                    method:"POST",  
                    data:{query:query},  
                    success:function(data)  
                    {  
                        
                        $('#userList').html(data);  
                    }  
                });  
            }  
        });  
    });  
</script>
<script>  
    $(document).ready(function(){  
        $('#vacancy').keyup(function(){  
            var query = $(this).val();  
            if(query != '')  
            {  
                $.ajax({  
                    url:"searchByVacancyName.php",  
                    method:"POST",  
                    data:{query:query},  
                    success:function(data)  
                    {  
                        
                        $('#vacancyList').html(data);  
                    }  
                });  
            }  
        });  
    });  
</script>
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
             <a class="nav-link" href="index.php">Log out</a>
           </div>
         </div>

   
            <div class="col-4">
            <div class="col-6 createAndSearch">
            <form action="searchBySkillName.php" method="post">
                <h2>Search Vacancy Based on Skill</h2>
                <input type="text" name="skill" id="skill" placeholder="Enter Programming skill" />  
                <div id="skillList"></div>  
                
         </form>
          </div>
          <div class="col-6 createAndSearch">
            <form action="myProfile.php" method="post">
                <h2>Search Users Based on Name</h2>
                <input type="text" name="user" id="user" placeholder="Enter Name" />  
                <div id="userList"></div> 
          </form>
          </div></div>
      </div>
          </div>
          <div class="col-6 createAndSearch">
            <form action="searchByVacancyName.php" method="post">
                <h2>Search for Vacancies</h2>
                <input type="text" name="vacancy" id="vacancy" placeholder="Enter Name" />  
                <div id="vacancyList"></div> 
          </form>
          
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
          
          if ($vacancy['isDeleted'] == 1) {
            }else{
            ?>
            
            <div class="pot-connect">  
                
                <h2> <?php echo $vacancy['organisation_name']; ?></h2>
                
                <p>Vacancy name: <?php echo $vacancy['Vacancy_name']; ?></p>
                <p>Vacancy description: <?php echo $vacancy['Vacancy_description']; ?></p>
                <p>Location: <?php echo $vacancy['Location']; ?></p>
                <form action="">
                    <div ><button class="btn btn-primary profile-button " style="float:right;" class="button" name="Vacancy_id" type="submit" value="<?php echo $vacancy['Vacancy_id']; ?>">Apply</button><!--</a>--></div>  
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
