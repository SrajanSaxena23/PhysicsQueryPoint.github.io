
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- <meta http-equiv="refresh" content="2"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<body>
<style>
ul{
    text-align:center;
    text-decoration:none;
    list-style:none;
    font-weight:bold;
    
}
form{
    margin-top: 10px;
    margin-left: 10px;
    margin-right: 10px;
    font-size: 21px;
    font-weight: bolder;
    margin-top:4%;
}
h2:hover{
  color:blue;
  text-decoration:underline;
}
button{
  margin-top:1%;
  margin-bottom:3%;
  color:white;
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
    <a class="navbar-brand" >Query Point</a>
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
          <a class="nav-link" href="welcome.php">Welcome</a>
        </li>         
        <li class="nav-item">
          <a class="nav-link" href="sign-up.php">Sign-up</a>
        </li>         
        <li class="nav-item">
          <a class="nav-link" href="login.php">Login</a>
        </li>         
        </ul>
       
    </div>
    </nav>
    <div class="jumbotron jumbotron-fluid" >
  <div class="container" text-center>
    <h1 class="display-4" >Physics Query Point</h1>
    <p class="lead"></p>
    <p class="lead text-center">There are  few points to remember:
    <ul>
    <li>
    1- Be polite to others.
    </li>
    <li>
    2- Do not spam the chat.
    </li>
    <li>
    3- No promotions.
    </li>
    </ul>
    </p>
  </div>
</div>
   
  

<h2>Fill the form to ask a question:</h2>
<form action="questions.php" method="post" >
  
  <div class="form-group">
  <img src="https://img.icons8.com/color/64/000000/name.png"/><label for="name">Username</label>
    <input type="text" class="form-control" id="name" name="name">
  </div>
 
  <div class="form-group">
  <img src="https://img.icons8.com/flat_round/48/000000/question-mark.png"/><label for="question">Your question:</label>
    <input type="text" class="form-control" id="question" name="question">
  </div>
 
  <div class="form-group">
  <img src="https://img.icons8.com/nolan/64/text-box.png"/><label for="description">If Any Description:</label>
    <textarea class="form-control"  name = "description" id="description" rows="3"></textarea>
    
    <!-- <input type="submit" class = "mt-4 " name = "submit" value="Upload File"> -->
    
  </div>
  <button type="submit" class="btn btn-primary mt-4">Submit</button><br>
  <input class="btn btn-dark " type="reset" value="Reset">
</form>
<h1 class="text-center"> Browse questions:</h1>
<?php
require "post.php";
        $sql2 = "SELECT * FROM questionform  ";
          $result2 = mysqli_query($conn , $sql2);
          $showalert = true;
              while($row = mysqli_fetch_assoc($result2)){
                $showalert = false;
                $id = $row['question_id'];
                $newname = $row['Username'];
                $question = $row['question'];
                $DESCRIPTION = $row['Description'];
                $time = $row['time'];
                
                echo '<div class="media ml-5 mt-4">
                <img src="https://img.icons8.com/officel/64/000000/user.png" class="mr-3"> 
                <div class="media-body">
                  <h5 class=""mt-0 >Posting-date-time-->' .$time.'</h5>
                  <h5 class=""mt-0 >Posted by-->'.$newname.'</h5>
                  <h5 class="mt-0" id="q">'.$question.'</h5>
                  <h6 class="mt-0" id = "d">'.$DESCRIPTION.'</h6>
                  <a href="Mainanswer.php?catid='.$id.'"><button type="button" class="btn btn-dark btn-lg">Give reply--></button></a>
             
                </div>
                </div>';
              }
              if($showalert){
                echo '<div class="jumbotron jumbotron-fluid">
                <div class="container">
                  <h1 class="display-4">No questions yet</h1>
                  <p class="lead text-center">Be the first one to ask questions.</p>
                </div>
              </div>';
              }
?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>
