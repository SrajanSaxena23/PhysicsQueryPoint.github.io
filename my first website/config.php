<?php
error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "";
$database = "dbsrajan";

  $conn = mysqli_connect($servername , $username , $password , $database);
  if(!$conn){
      die("Connection is not successful".mysqli_connect_error());
  }
?>