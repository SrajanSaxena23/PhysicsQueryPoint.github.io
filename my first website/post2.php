<?php
        require "config.php";
		error_reporting(0);
		$iterate = false;
        
        if($_SERVER['REQUEST_METHOD']=='POST' ){
			$username2 = $_POST['Usern'];
			$comment = $_POST['comment'];
			if(!empty($username2) && !empty($comment)){
				$sql = "SELECT * FROM helloworld where Username='$username2' ";
				$result = mysqli_query($conn , $sql);
				$num = mysqli_num_rows($result);
				if($num==1){
							
					$sql6 = "INSERT INTO `comments` (`Username`,`comment`) VALUES ('$username2','$comment')";
					$result6 = mysqli_query($conn , $sql6);	
					
					}
				}
			}
?>