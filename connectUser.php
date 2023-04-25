<?php
    (include 'connection.php');

    $Connect_id = $_REQUEST['user_id'];
    $Current_id = $_COOKIE['user'];


  include('connection.php');
  $sql = "SELECT * FROM connections;";  
  $result = mysqli_query($con, $sql);  

  $connections = array();
  while ($row = mysqli_fetch_assoc($result)) {
    $key = $row['Connection_id'];
    if(!array_key_exists($key, $connections)){
      $connections[$key] = array(
        'Connection_id' => $row['Connection_id'],
        'User_1'=> $row['User_1'],
        'User_2'=> $row['User_2'],
        'isConnected'=> $row['isConnected']
      );
    }

  }

  $count = 0;
  $var = false;
  foreach($connections as $connection){
    if ($connection['User_1'] == $Current_id || $connection['User_2'] == $Current_id ) {
        if ($connection['User_1'] ==$Connect_id || $connection['User_2'] ==$Connect_id) {
            $var = true;
            break;
            
        }
        echo $var;
    }
  }
  if ($var == false) {

    $sql = "INSERT INTO connections (User_1, User_2) VALUES ('$Current_id', '$Connect_id')";
    $result = mysqli_query($con, $sql);  
    header("Location:connections.php");
  }else{

    $sql = "DELETE FROM connections WHERE User_1 ='$Current_id' AND User_2='$Connect_id'";
    $result = mysqli_query($con, $sql);
    header("Location:connections.php");
  }
?>