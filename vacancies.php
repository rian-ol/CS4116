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


</head>
<body>
    <div class="main container-fluid">
        <nav class="navbar navbar-fixed-top">
           <a class="navbar-brand" href="home.html">
             <img src="DevLink.jpg" height="40" alt="DevLink">
           </a>
        </nav>
           <div class="topnav">
             <a class="nav-link "href="vacancies.php">Vacancies</a>
             <a class="nav-link" href="feed.html">Feed</a>
             <a class="nav-link" href="connections.html">Connections</a>
             <a class="nav-link" href="myProfile.php">My Profile</a>
             </form>
           </div>
         </div>
         <form action="searchByName.php" method="post">
                <div class="d-flex search">
                <div class="vacancieCards">
                   <h2>Search Users Based on Name</h2>
                   <input type="text" name="user" id="user" placeholder="Enter Programming skill" />  
                   <div id="userList"></div> 
                   </table>
                </div>
             </a></div>
             </form>
           </div>
         </div>

         <form action="createVacancyMethod.php" method="post">
         <div class="row justify-content-center">
            <div class="col-6">
                <div class="vacancieCards">
                   <h2>Create Vacancy</h2>
                   <table class="table">
                    <tr>
                        <th scope="row">Vacancy Name:</th>
                        <td><input type="Vacancy_name" name="Vacancy_name" id="Vacancy_name" placeholder="Enter Vacancy Name" /></td>
                    </tr>
                    <tr>
                        <th scope="row">Vacancy Description:</th>
                        <td><input type="Vacancy_description" name="Vacancy_description" id="Vacancy_description" placeholder="Enter Vacancy Description" /></td>
                    </tr>
                    <tr>
                        <th scope="row">Experience:</th>
                        <td><input type="Experienced_required" name="Experienced_required" id="Experienced_required" placeholder="Enter Experience recommended (in years)" /></td>
                    </tr>
                    <tr>
                        <th scope="row">Location:</th>
                        <td><input type="Location" name="Location" id="Location" placeholder="Enter Location" /></td>
                    </tr>
                   </table>
                   <input class="button" type="submit"
                     name="login" value="Create Vacancy">
                </div>
             </a></div>
            </form>



            <form action="searchBySkillName.php" method="post">

                <div class="col-4">
                <div class="vacancieCards">
                   <h2>Search Vacancy Based on Skill</h2>
                   <input type="text" name="skill" id="skill" placeholder="Enter Programming skill" />  
                   <div id="skillList"></div> 
                </div>
             </a></div>                        

</form>
</body>
</html>