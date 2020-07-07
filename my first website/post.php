<?php
require "config.php";
error_reporting(0);
if($_SERVER['REQUEST_METHOD']=='POST'){
  $name = $_POST['name'];
  $quest2 = $_POST['question'];
  $desc = $_POST['description'];
  
  // echo "<img src ='$folder' height = '250' width = '500'/>";
      if(!empty($quest2) && !empty($name)){
        $sql = "SELECT * FROM helloworld where Username='$name' ";
				$result = mysqli_query($conn , $sql);
				$num = mysqli_num_rows($result);
				if($num==1){

          $sql = "INSERT INTO `questionform` (`Username`,`question`, `Description`, `time`) VALUES ('$name','$quest2', '$desc', current_timestamp())";
          $result = mysqli_query($conn , $sql);
          }else{
            echo'<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Failure</strong> Username does not match.
           
              
          </div>';
          exit;
          }
        }
      }
      
    
        if($result){
          echo '<div class="alert alert-success alert-dismissible fade show " role="alert">
          <strong>Success</strong> Your query has been inserted.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>';
        }
        else{
          echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Failure</strong> Your query has not been inserted.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>';
          
        }   
    
    
   
    
?>