<?php
   require_once "connection.php";
   
  
   if(isset($_SESSION['submit']))

   {
    //something was posted
    $name = mysqli_real_escape_string($con, $_POST['user_name']);
    $email=  mysqli_real_escape_string($con, $_POST['email']);
    $pass= md5($_POST['password']);
    $passcon = md5($_POST['confirm_password']);

    $select = "SELECT * FROM `users` WHERE email = '$email' && password = '$pass' ";

    $result = mysqli_query($con, $select);
    if(mysqli_num_rows($result) > 0){
     $error[] = 'user already exist!';
    }
    else{
      if($pass != $passcon){
        $error[] = 'password do not match!';
      }else{
        $insert = "INSERT INTO `users`(user_id, email, password) VALUES('$name','$email','$pass')";
        mysqli_query($con, $insert);
        header('location:login.php');
        die;
      }
    }
    


      
   };


?>

