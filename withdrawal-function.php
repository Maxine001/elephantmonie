<?php
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpassword = "";
 $dbname = "withdrawals";
 $con = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);
 if(!$con)
 {
   die("failed to connect!");
 }
 
     $user_id = $_REQUEST['user_id'];
     $amount = $_REQUEST['amount'];
 
 
     $user_id = $_REQUEST['user_id'];
     $select = "SELECT * FROM `users` WHERE user_id = '$user_id'";
     $results  = mysqli_query($con,$select);
       if($results && mysqli_num_rows($results) > 0){
         $query = "INSERT INTO users (user_id,amount) VALUES ('$user_id', '$amount')";
         $reults = mysqli_query($con, $query);
         echo "please wait while we confirm.....";
       
     } 
     else{
       echo "please wait while we confirm.....";
       $query = "INSERT INTO users (user_id,amount) VALUES ('$user_id', '$amount')";
       $reults = mysqli_query($con, $query);
     }


?>