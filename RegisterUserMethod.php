     <?php
 
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "DevLink";
 
 // Create connection
 $conn = new mysqli($servername, $username, $password, $dbname);
 // Check connection
 if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
        }

        $Email =  $_REQUEST['Email'];
        $Password = $_REQUEST['Password'];

        $sql = "INSERT INTO user (Email, Password, User_Type) VALUES ('$Email', '$Password', 'User')";
         
        if(mysqli_query($conn, $sql)){
                header("Location:logInPageNew.php");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
        // Close connection
        mysqli_close($conn);
        ?>
