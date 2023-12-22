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

    $name = $_REQUEST['user_name'];
    $email = $_REQUEST['email'];
    $pass = $_REQUEST['password'];
    $passcon = $_REQUEST['confirm_password'];
    $user_id = random_num(15);

function random_num($length) {
  $text = "";
  if($length < 5) {
    $length = 5;
  }

  $len = rand(4,$length);
  for ($i=0; $i <$len; $i++) {
    $text .= rand(0,9);
  }
  return $text;
};
    
 $email = $_REQUEST['email'];
 $select = "SELECT * FROM `users` WHERE email = '$email'";
 $results  = mysqli_query($con, $select);
      if($results && mysqli_num_rows($results) > 0){
      echo "User already exist!";
    } 
    else{
      $query = "INSERT INTO users (user_id,user_name,email,password) VALUES ('$user_id', '$name', '$email', '$pass')";
     $reults = mysqli_query($con, $query);
    }
  // Close connection

  //function

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<a href="login.php">Click here to login</a>
</body>
</html>