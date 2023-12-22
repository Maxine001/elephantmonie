<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbname = "deposits";
$con = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);
if(!$con)
{
  die("failed to connect!");
}

    $plan = $_REQUEST['plan'];
    $amount = $_REQUEST['amount'];
    $user_id = $_REQUEST['user_id'];


    $user_id = $_REQUEST['user_id'];
    $select = "SELECT * FROM `users` WHERE user_id = '$user_id'";
    $results  = mysqli_query($con,$select);
      if($results && mysqli_num_rows($results) > 0){
        $query = "INSERT INTO users (plan,amount,user_id) VALUES ('$plan', '$amount', '$user_id')";
        $reults = mysqli_query($con, $query);
        echo "please wait while we confirm.....";
      
    } 
    else{
      echo "please wait while we confirm.....";
      $query = "INSERT INTO users (plan,amount,user_id) VALUES ('$plan', '$amount', '$user_id')";
      $reults = mysqli_query($con, $query);
    }
    
?>