<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!= true){
    // header("location: login.php");
    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Login please</strong> otherwise you will not be able to comment and answer the questions.Unless you can browse them.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel = "stylesheet" href="bootstrap.min.css">
    <style>
        p{
                text-align:center;
        }
        
        
        h3{
          text-align:center;
          font-weight:bold;
          padding-top:10px;
          margin-top:5px;
        }
        h3:hover{
          color:blue;
          transition:3s;
        }
        ul{
    font-weight:bold;
}
    </style>
</head>
<body>
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
          <a class="nav-link" href="comments.php">Comment</a>
        </li> 
        <li class="nav-item">
          <a class="nav-link" href="Blog.php">Blog</a>
        </li> 

       
        
        </ul>
       
    </div>
    </nav>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="physics5.jpg" class="d-block w-100" >
      <div class="carousel-caption d-none d-md-block mb-100  ">
        <h1>HELLO SIR ,</h1>
        <p>welcome-<?php echo$_SESSION['username'] ?></p>
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
</div>
<hr>
<h3 data-aos="fade-right">Welcome To Physics Query Point</h3>
<hr>

<div class="row row-cols-1 row-cols-md-2" data-aos="zoom-in">
  <div class="col mb-4">
    <div class="card">
      <img src="physics9.jpg" class="card-img-top" >
      <div class="card-body">
        <h5 class="card-title text-left">Browse and Ask Questions </h5>
        <p class="card-text text-left">Here you can ask questions</p>
        <a href="questions.php"><button type="button" class="btn btn-primary m-auto">Browse Questions</button></a>
      </div>
    </div>
  </div>
  <div class="col mb-4"data-aos="zoom-in">
    <div class="card">
      <img src="physics10.jpg" class="card-img-top" >
      <div class="card-body">
        <h5 class="card-title text-left"> Thanks for joining us.</h5>
        <p class="card-text text-left">Visit again</p>
        <a href="Answers.php"><button type="button" class="btn btn-primary">Visit-again</button></a>
        
      </div>
    </div>
  </div>
  

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
</body>
</html>