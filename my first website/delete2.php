<?php
$servername = "localhost:3307";
$username = "root";
$password = "";
$database = "dbsrajan";

$conn = mysqli_connect($servername , $username , $password , $database);
if(!$conn){
    die("Connection is not successful".mysqli_connect_error());
}else{
        echo "connection successful <br>";
        $i2 = $_GET['rn2'];
        $query2 = "DELETE FROM comments WHERE Username = '$i2'";
        $run2 = mysqli_query($conn,$query2);
        header("location: comments.php");
}