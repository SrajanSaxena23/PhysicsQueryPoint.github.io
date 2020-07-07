<?php

$login = false;
$showerror = false;
if($_SERVER['REQUEST_METHOD'] == "POST" ){
    $usern = $_POST['username'];
    $passwd = $_POST['password'];
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "dbsrajan";

    $conn = mysqli_connect($servername , $username , $password , $database);
    if(!$conn){
        die("Connection is not successful".mysqli_connect_error());
    }
    else{
        $sql = "SELECT * FROM helloworld where Username='$usern' AND password='$passwd' ";
        $result = mysqli_query($conn , $sql);
        $num = mysqli_num_rows($result);
        if($num == 1){
            $login = true;
            session_start();
            $_SESSION['loggedin']= true;
            $_SESSION['username']= $usern;
            
        }
        else{
            $showerror = "Invalid credentials , confirm that you have signed up first before logging in. ";
        }
    }
}
   
    
    


?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Login</title>
</head>
    <body>
    <?php
    if($login){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success</strong> Your entry has been successfully inserted , Thanks For Joining Us , now you can access comments page and can ask questions and reply them . <strong>Remember your username!</strong>
      
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>

</div>
    ';
    }
    if($showerror){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>'.$showerror.'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
    }
    
    ?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand">Query Point</a>
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
            <a class="nav-link" href="sign-up.php">Sign-up</a>
        </li>
        
        <li class="nav-item">
            <a class="nav-link" href="login.php">login</a>
        </li>
        
        <li class="nav-item">
            <a class="nav-link" href="welcome.php">welcome</a>
        </li>
        
        </ul>
        <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
    </nav>
    <div class="alert alert-info alert-dismissible fade show" role="alert">
  <strong>Hey!</strong> Login first to have acess to comments page . After logging remember your username.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
    <div class="container mt-3">
    <h1>Login to continue</h1>
        <form action = "/srajan/login.php " method = "post">
        <div class="form-group">
        <img src="https://img.icons8.com/color/48/000000/user-male-circle.png"/><label for="username">Username</label>
            <input type= "text" name = "username" class="form-control" id="username" aria-describedby="emailHelp">
            <small id="emailHelp" class="fo.rm-text text-muted">We'll never share your personal information with anyone else.</small>
        </div>

        <div class="form-group">
        <img src="https://img.icons8.com/cute-clipart/48/000000/forgot-password.png"/><label for="password">Password</label>
            <i class="fas fa-eye"></i>
            <input type="password" class="form-control" name = "password" id="password">
        </div>
        
        <button type="submit" class="btn btn-primary">login</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </body>
</html>


