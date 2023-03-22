<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="DevLink.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  
</head>
<body>
    <div class="">
        <div class="d-flex  ">
            <img src="DevLink.jpg" height="75" alt="DevLink">
        </div>
        <div class="d-flex  justify-content-around">
            <div>
                <div >
                    <div class="d-flex justify-content-between align-items-right mb-3">
                        <h4>Register</h4>
                    </div>
                    <form action="RegisterUserMethod.php" method="post">
                      <div >
                          <div ><label class="labels">Email</label><input type="text" class="form-control" placeholder="Email" name="Email"></div>
                      </div>
                      <div >
                          <div><label class="labels">Password</label><input type="text" class="form-control" placeholder="Password" name="Password"></div>
                        </div>
                      <div><button class="btn btn-primary profile-button" class="button" type="submit">Register</button></div>
                      </form>
                </div>
                <div ><a href="loginpagenew.php"><button class="btn btn-primary profile-button " class="button" type="submit">Login to existing account</button></a></div>
            </div>
        </div>
    </div>
</body>
