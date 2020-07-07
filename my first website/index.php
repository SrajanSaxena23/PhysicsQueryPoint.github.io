<?php
error_reporting(0);
$re = false;
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
          }else{
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Invalid crendentials , check your inputs.</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
          }
            if($result){
                echo  '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Your entry has been inserted successfully.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>';
            
            }
            else{
                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Your entry has not been inserted</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>';
            }
        }
   
    }else if($passwd != $conpasswd){
        echo '<div class="alert alert-danger" role="alert">
        Invalid password
    </div>';
    }
} 



?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name = "description" content="Physics website for answering the questions asked by the users">
  <meta name="author" content="Srajan-Saxena">
  <meta name = "keywords " content =  "HTML , BOOTSTRAP , CSS , JQUERY , PHP">
  <title>Home</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
 
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link rel="stylesheet" href = "practice.css">
  
</head>
<body>
<style>
.carousel-caption{
  padding-bottom:0px;
  font-size:50px;
}
ul{
    font-weight:bold;
}

.container-fluid{
  padding:7% 15%;
  background-image:url("https://wallpaperaccess.com/full/2329349.jpg");
  background-size:cover;
  background-attachment:fixed;
  background-repeat:no-repeat;
}
h4{

  font-weight:900;
  font-size:50px;
  text-outline:black;
  color:rgb(233, 233, 136);
}
.srajan{
  font-weight:800;
  font-size:20px;
    color:white;
}
footer{
  text-align:center;
  background-image:url("https://coolbackgrounds.io/images/backgrounds/white/white-unsplash-9d0375d2.jpg")
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
          <a class="nav-link" href="practice.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact-us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="sign-up.php">Sign-Up</a>
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

       
        <button class="btn btn-outline-success my-2 my-sm-0" type="button" data-toggle="modal" data-target="#exampleModal">Sign-Up</button>
      </form>
    </div>
  </nav>
  <?php
  if($re){
    echo '<div class="alert alert-success" role="alert">
                Your entry has been successfully inserted , Thanks For Joining Us,now go to login page to continue your journey
                <a href="login.php">.Teleport</a>
            </div>';
  }
  ?>
  <!-- <h1 id = "hello">Welcome To Query Point</h1> -->
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="physics.jpeg" class="d-block w-100" >
      <div class="carousel-caption d-none d-md-block mb-100  ">
        <h1>Query Point</h1>
        <hr>
        <p>Sign up to continue you journey</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="physics2.jpg" class="d-block w-100" >
    </div>
    <div class="carousel-item">
      <img src="physics3.jpg" class="d-block w-100" >
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div><br>
<hr>
<h3 class="text-center" ></h3>

<div class="card mb-3" data-aos="zoom-in">
  <img src="n10.jpg" class="card-img-top" >
  <div class="card-body">
    <h3 class="card-title">Give us suggestion regarding website for improvement</h3>
    <p class="card-text">If you like the website then plz comment and if you have found any deformity then plz browse and give us suggestions.</p>
    <p class="card-text"><small class="text-muted">Signup to continue</small></p>
    <a href="comments.php"><button type="button" class="btn btn-outline-dark" id="black">Comment</button></a>
  </div>
</div>
<div class="card mb-3" data-aos="flip-left"
        data-aos-easing="ease-out-cubic"
        data-aos-duration="2000">
  <img src="n9.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h3 class="card-title">About the website</h3>
    <p class="card-text">Browse the info to see all the information regarding the website.</p>
    <p class="card-text"><small class="text-muted">Enjoy</small></p>
    <a href="about.php"><button type="button" class="btn btn-outline-success" id="green">Info</button></a>
  </div>
</div>
<div class="container-fluid text-center">
  <div class="row">
    <div class=" srajan col-lg-4  ">
    <img src="https://img.icons8.com/clouds/100/000000/trust.png"/>
    <h4>Realiability</h4>
    <p >The answers given by the tutor will be upto the perfection mark.</p>
    </div>
    <div class=" srajan col-lg-4 ">
    <img src="https://img.icons8.com/dusk/80/000000/thumb-up.png"/>
    <h4>Dexterity</h4>
    <p >This site is full of knowledge and will be able to satisfy you completely.</p>
    </div>
    <div class=" srajan col-lg-4 ">
    <img src="https://img.icons8.com/clouds/100/000000/security-shield-green.png"/>
    <h4>Security</h4>
    <p >We ensure you  that we will never allow anyone to browse your details.</p>
    </div>
  </div>
</div>
<hr>
<!-- <hr> -->
<footer >
    <img src="https://img.icons8.com/fluent/50/000000/facebook-new.png"/><img src="https://img.icons8.com/cute-clipart/60/000000/twitter.png"/><img src="https://img.icons8.com/cute-clipart/64/000000/instagram-new.png"/><img src="https://img.icons8.com/color/54/000000/youtube-squared.png"/>

    </footer>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Sign Up</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="container">
  
      <div class="modal-body">
        <form action = "index.php" method = "post">
                <div class="form-group">
                <img src="https://img.icons8.com/color/48/000000/user-male-circle.png"/><label for="username">Username</label>
                    <input type= "text" name = "username" class="form-control" id="username" aria-describedby="emailHelp" placeholder="Enter the username">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your personal information with anyone else.</small>
                </div>
        
                <div class="form-group">
                <img src="https://img.icons8.com/cute-clipart/48/000000/forgot-password.png"/><label for="password">Password</label>
                    <input type="password" class="form-control" name = "password" id="password" placeholder="Enter the password">
                </div>
        
                <div class="form-group">
                <img src="https://img.icons8.com/officel/48/000000/password1.png"/><label for="confirmpassword">Confirm Password</label>
                    <input type="password" class="form-control" name = "confirmpassword" id="confirmpassword" placeholder=" Confirm password">
                    <small id="pass" class="form-text text-muted">Make sure to type same password </small>
                </div>
                
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary text-center" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Sign-Up</button>
            </div>
        </form>
</div>
  </div>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script>
  $('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('whatever') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  
})
</script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
      AOS.init({
          duration:2000,
          
      });
    </script>
    <script>
    $(function () {
  $('[data-toggle="popover"]').popover()
})
    </script>
    
</body>
</html>