<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbname = "registration";
$con = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);
if(!$con)
{
  die("failed to connect!");
}

  // Close connection


  function check_login($con)
  {
    if(isset($_SESSION['user_id'])) {
      $id = $_SESSION['user_id'];
      $query = "SELECT * FROM users WHERE user_id = '$id' limit 1";
      //$query = "SELECT user_id, user_name, email FROM users";

      $result = mysqli_query($con, $query);
      if($result && mysqli_num_rows($result) > 0) {while
        ($user_data = mysqli_fetch_assoc($result))
        
        echo "Welcome:", "". $user_data["user_name"] . "<br>";
        return $user_data;
      }
      
    } 
    
    //redirect to login
    header("Location: login.php");
    die;
    
  };

function random_num($length) {
  $text = "";
  if($length < 5) {
    $length = 5;
  }

  $len = rand(4,$length);
  for ($i=0; $i <$len; $i++) {
    $text.= rand(0,9);
  }
  return $text;
}

?>