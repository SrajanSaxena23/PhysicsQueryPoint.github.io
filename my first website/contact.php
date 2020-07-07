<?php
error_reporting(0);
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!= true){
    echo "login first";
    header("location: login.php");

}else{
        if($_SERVER['REQUEST_METHOD']=="POST"){
            $US = $_POST['username'];
            $email = $_POST['Email'];
            $DESC = $_POST['description'];

            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "dbsrajan";

            $conn = mysqli_connect($servername , $username , $password , $database);
            if(!$conn){
                die("Connection is not successful".mysqli_connect_error());
            }
            else{
                $sql2 = "SELECT * FROM  `helloworld` where Username = '$US' ";
                $result2 = mysqli_query($conn,$sql2);
                $num = mysqli_num_rows($result2);
                if($num==1){
                  $sql = "INSERT INTO `contacts` (`Username`, `Email`, `Description`) VALUES ('$US', '$email', '$DESC')";
                  $result = mysqli_query($conn,$sql);
                  if($result){
                    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    Your problem would be taken into deep concern , Thanks for contacting <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    </div>';
                  }
                      else{
                          echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                          <strong>Your problem request has not been submitted . Please check your given credentials. </strong> <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                          </button>
                      </div>';
                      }

                }else{
                  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                  Your problem request has not been submitted.Please check your given credentials. <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>';
                  }
                }

            
             }
          }
     
    

?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel = "stylesheet" href = "contact.css">
</head>
<body>
<style>
ul{
  font-weight:900;
}

</style>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Query point</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact-us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">login
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="welcome.php">Welcome</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2 mr-1" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0 mr-3" type="submit">Search</button>
        
      </form>
    </div>
  </nav>
  <form action = "/srajan/contact.php" method = "post">
          <div class="form-group">
          <img src="https://img.icons8.com/offices/48/000000/user-folder.png"/><label  for="username" >Username</label>
              <input type= "text" name = "username" class="form-control text-center " id="username" aria-describedby="emailHelp">
            </div>
            
            <div class="form-group">
            <img src="https://img.icons8.com/nolan/48/email.png"/><label for="Email">Email</label>
              <input type="emial" class="form-control" name = "Email" id="Email">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
              
          <div class="form-group">
          <img src="https://img.icons8.com/nolan/48/text-box.png"/><label for="description">Description</label>
              <textarea class="form-control"  name = "description" id="description" rows="3"></textarea>
          </div>
          <button type="Submit" class="btn btn-primary">Submit</button>
          <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>
