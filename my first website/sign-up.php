 <?php
error_reporting(0);
if($_SERVER['REQUEST_METHOD'] == "POST" ){
    $usern = $_POST['username'];
    $passwd = $_POST['password'];
    $conpasswd = $_POST['confirmpassword'];
    
    if($passwd == $conpasswd){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "dbsrajan";

        $conn = mysqli_connect($servername , $username , $password , $database);
        if(!$conn){
            die("Connection is not successful".mysqli_connect_error());
        }
        else{
            if(!empty($usern) && !empty($passwd) && !empty($conpasswd)){
                $sql = "INSERT INTO `helloworld` (`Username`, `password`, `ConfirmPassword`) VALUES ('$usern', '$passwd', '$conpasswd')";
                $result = mysqli_query($conn , $sql);
            }else {
                echo'<div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Fill all the details</strong> 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>';
            }

            if($result){
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> Your details have been inserted.Now login to continue your journey.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>';
            
            }
            else{
                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Failure!</strong> Your details have not been inserted.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>';
                
            }
        }
   
    }else if($passwd != $conpasswd){
        echo '<div class="alert alert-danger" role="alert">
        Invalid credentials
    </div>';
    }
} 



?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>sign-up</title>
</head>
    <body>
    <style>
    ul{
        font-weight:bold;
    }
    </style>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Query Point</a>
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
       
        
        </ul>
        <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
    </nav>
    <div class="container mt-3">
    <h1>Sign up for your concerns</h1>
        <form action = "/srajan/sign-up.php " method = "post">
        <div class="form-group">
        <img src="https://img.icons8.com/color/48/000000/change-user-male--v1.png"/><label for="username" >-Username</label>
            <input type= "text" name = "username" class="form-control" id="username" aria-describedby="emailHelp">
            <small id="emailHelp" class="form-text text-muted">We'll never share your personal information with anyone else.</small>
        </div>

        <div class="form-group">
        <img src="https://img.icons8.com/cute-clipart/64/000000/forgot-password.png"/><label for="password">-Password</label>
            <i class="fas fa-eye"></i>
            <input type="password" class="form-control" name = "password" id="password">
        </div>

        <div class="form-group">
        <img src="https://img.icons8.com/officel/48/000000/password1.png"/><label for="confirmpassword">Confirm Password</label>
            <input type="password" class="form-control" name = "confirmpassword" id="confirmpassword">
            <small id="pass" class="form-text text-muted">Make sure to type same password </small>
        </div>
        
        <button type="submit" class="btn btn-primary">Sign-Up</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </body>
</html> -->
