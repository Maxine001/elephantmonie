<?php
session_start(); 
include("connection.php");
include("functions.php");


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

if($_SERVER['REQUEST_METHOD'] === "POST"){
    $email = $_REQUEST['email'];
    $pass = $_REQUEST['password'];
   


    //read from database
    $query = "SELECT * FROM users WHERE email = '$email' && password = $pass limit 1";
    $result = mysqli_query($con, $query);

    if($result){
      if($result && mysqli_num_rows($result) > 0)
      {
        $user_data = mysqli_fetch_assoc($result);
        if($user_data['password'] === $pass)
        {
          $_SESSION['user_id'] = $user_data['user_id'];
          header("Location: dashboard.php");
          die;
        }else{
          echo 'wrong email or password';
        }
      }
        
    }

};
   


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link href="styleform.css" rel="stylesheet">
</head>
<body>
  <div class="container1">
    <form action="" method="post">
      <div class="login-top">Login</div>
      <p>Please enter your email and password!</p>
      <div>
        <label>Email</label>
        <input type="text" name="email">
      </div>
      <div>
        <label>Password</label>
        <input type="password" name="password">
      </div>
      <div>
        <input type="submit" id="login" value="Login">
        <p class="click"><a href="signup.html">Click to Signup</a></p>
      </div>
    </form>
  </div>
  
</body>
</html>