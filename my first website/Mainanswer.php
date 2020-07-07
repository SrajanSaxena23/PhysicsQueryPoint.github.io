<?php
        require "post2.php";
        $id2 = $_GET['catid'];
        $sql3 = "SELECT * FROM questionform where question_id = '$id2'  ";
        $result3 = mysqli_query($conn , $sql3);
        
        while($row = mysqli_fetch_assoc($result3)){
          $username=$row['Username'];
          $question2 = $row['question'];
          $DESCRIPTION2 = $row['Description'];
          $time2 = $row['time'];
         
        }
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" 
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
<style>
::placeholder{
  font-weight:900;
  font-size:28px;
  text-align:center;
}
textarea{
  margin-left:10px;
  margin-right:20px;
}
.jumbotron h1{
  text-align:center;
  font-weight:bold;
}
.jumbotron p{
  font-weight:bold;
}
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
        

       
        
        </ul>
       
    </div>
    </nav>
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4 text-center" ><?php echo "<div class='media'>
  
  <div class='media-body'>
    <h1 class='mt-0' style='font-weight:900;'>".$question2."</h1>"
   .$DESCRIPTION2. 
  "</div>
</div>"; ?></h1>
    <p class="lead text-center" style="font-weight:800;"><?php echo "<h3 class='text-center'> Posted-by-->".$username."</h4>" ?></p>
    <p class="lead text-center" style="font-weight:700;"><?php echo "<h5 class='text-center'> Posted-on-->".$time2."</h4>" ?></p>
  </div>
</div>
<hr>
<span><h1 class="text-center" style="font-weight:700;">Discussions:</h1><span>
<hr>
<form action="<?php  echo $_SERVER['REQUEST_URI']  ?>" method="POST">
  <div class="form-group">
  <h2 class="text-center ml-5 mr-5" style="font-weight:900;" ><img src="https://img.icons8.com/officel/64/000000/change-user-male.png"/><label for="exampleInputEmail1">Username</label></h2>
    <input type="text" class="form-control" id="exampleInputEmail1" name="username" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your personal information with anyone else.</small>
  <h2 class="text-center"><img src="https://img.icons8.com/nolan/64/topic.png"/><label for="exampleFormControlTextarea1" style="font-weight:900;"  >Give Answer</label></h2>
      <textarea class="form-control mr-5 ml-2" id="exampleFormControlTextarea1"  name="ans" rows="3"></textarea>
     
    </div>
    <button type="submit" class="btn btn-success btn-lg mt-3 ml-3">Add answer--></button>
</form>
<?php
require "post3.php";
$sql12 = "SELECT * FROM replies where thread_id='$id2'";
$result12 = mysqli_query($conn , $sql12);
$showalert2 = true;
while($row5 = mysqli_fetch_assoc($result12)){
  $Username = $row5['Username'];
  $replies = $row5['Answer'];
  $time3 = $row5['Time'];
  $showalert2 = false;
  echo 

'<div class="media ml-5 mt-4">
<img src="https://img.icons8.com/officel/64/000000/user.png" class="mr-3"> 
<div class="media-body">
  <h5 class=""mt-0 >Posted-by-->'.$Username.'</h5>
  <h5 class=""mt-0 >'.$replies.'</h5>
  <h5 class="mt-0" id="q">Posting-Time-->'.$time3.'</h5>
  
      
</div>
</div>
  
  <hr>';
  
}
if($showalert2){
  echo '<div class="jumbotron jumbotron-fluid">
                <div class="container">
                  <h1 class="display-4">No answers yet</h1>
                  <p class="lead text-center">Be the first one to answer question.</p>
                </div>
              </div>';
}


?>

 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>