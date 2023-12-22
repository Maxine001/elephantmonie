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
?>