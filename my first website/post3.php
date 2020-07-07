<?php
require 'config.php';
// error_reporting(0);
$id3 = $_GET['catid'];
if($_SERVER['REQUEST_METHOD']=='POST'){
  $User = $_POST['username'];  
  $answer2 = $_POST['ans'];
  
    if(!empty($User) && !empty($answer2)){
      $sql = "SELECT * FROM helloworld where Username='$User' ";
				$result = mysqli_query($conn , $sql);
				$num = mysqli_num_rows($result);
				if($num==1){
          $sql8 = "INSERT INTO `replies` (`Username`,`thread_id`,`Answer`,`Time`) VALUES ('$User','$id3','$answer2', current_timestamp())";
          $result8 = mysqli_query($conn , $sql8);
         
    }else{
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>FAILURE! Type the username entered during login.</strong> 
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>';
    }
  }else {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Please fill all the given details to add answer</strong> 
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>';
  }
}
if($result8){
  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
<strong>Success</strong> 
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>';
}
else{
  echo '<br><div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Failure</strong> Your query has not been added due to some techinical problem.
   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
}
?>