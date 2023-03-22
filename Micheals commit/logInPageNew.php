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
                        <h4>Log In</h4>
                    </div>
                    <form action="logIn.php" method="post">
                    <div >
                        <div ><label class="labels">Email</label><input type="text" class="form-control" placeholder="Email" name="Email"></div>
                    </div>
                    <div>
                        <div ><label class="labels">Password</label><input type="Password" class="form-control" placeholder="Password" name="Password"></div>
                    </div>
                    <div ><button class="btn btn-primary profile-button" class="button" type="submit">Log In</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
