<?php

session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!= true){
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Comments</title>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Slicebox - 3D Image Slider with Fallback" />
        <meta name="keywords" content="jquery, css3, 3d, webkit, fallback, slider, css3, 3d transforms, slices, rotate, box, automatic" />
		<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
		<meta name="author" content="Pedro Botelho for Codrops" />
		<link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/slicebox.css" />
        <link rel="stylesheet" type="text/css" href="css/custom.css" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
		<script type="text/javascript" src="js/modernizr.custom.46884.js"></script>
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
          <a class="nav-link" href="welcome.php">welcome</a>
        </li> 

       
        
        </ul>
        <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
    </nav>
        <style>

            button:hover{
                border-radius:50%;
                transition:1s ease-in-out;
                
            }
			::placeholder{
				font-weight:900;
				text-align:center;
				font-size:25px;
				opacity:0.5;
			}
        </style>
		<div class="container">

			

			
			
			<div class="more">
				<ul id="sb-examples">
				
					
					
					
					
				</ul>
			</div>
            <h2>Comment </h2>
			<div class="wrapper">

				<ul id="sb-slider" class="sb-slider">
					<li>
						<img src="physics.jpeg" />
						<div class="sb-description">
							
						</div>
					</li>
					<li>
					<img src="physics5.jpg" />
						<div class="sb-description">
							
						</div>
					</li>
					<li>
						<img src="physics2.jpg" />
						<div class="sb-description">
							
						</div>
					</li>
					<li>
						<img src="physics3.jpg" />
						<div class="sb-description">
							
						</div>
					</li>
					<li>
						<img src="physics4.jpg" />
						<div class="sb-description">
							
						</div>
					</li>
					<li>
						<img src="physics8.jpg" />
						<div class="sb-description">
						
						</div>
					</li>
					<li>
						<img src="physics9.jpg" />
						<div class="sb-description">
						
						</div>
					</li>
				</ul>

			

				<div id="nav-arrows" class="nav-arrows">
					<a href="#">Next</a>
					<a href="#">Previous</a>
				</div>

			</div><!-- /wrapper -->
			<p class="info"><strong>Sign-Up</strong> to browse more</p>

		</div>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.slicebox.js"></script>
		<script type="text/javascript">
			$(function() {
				
				var Page = (function() {

					var $navArrows = $( '#nav-arrows' ).hide(),
						$shadow = $( '#shadow' ).hide(),
						slicebox = $( '#sb-slider' ).slicebox( {
							onReady : function() {

								$navArrows.show();
								$shadow.show();

							},
							orientation : 'r',
							cuboidsRandom : true,
							disperseFactor : 30
						} ),
						
						init = function() {

							initEvents();
							
						},
						initEvents = function() {

							// add navigation events
							$navArrows.children( ':first' ).on( 'click', function() {

								slicebox.next();
								return false;

							} );

							$navArrows.children( ':last' ).on( 'click', function() {
								
								slicebox.previous();
								return false;

							} );

						};

						return { init : init };

				})();

				Page.init();

			});
        </script>
        <form action="comments.php" method="POST">
					
			<div class="form-group ml-5 mr-5 text-center">
				<label for="comment" ><h2> Fill the username and textarea to Comment:</h2></label><br>
				<div class="form-group">
				<hr>
				<img src="https://img.icons8.com/officel/64/000000/change-user-male.png"/><label for="username"><h2>Username</h2></label>
					<input type= "text" name = "Usern" class="form-control  mr-4" placeholder="Type the username" id="username" aria-describedby="emailHelp">
					<small id="emailHelp" class="form-text text-muted">We'll never share your personal information with anyone else.</small>
				</div>
				<h2 class="text-center"><img src="https://img.icons8.com/nolan/64/topic.png"/>Comment</h2>
				<textarea class="form-control" id="comment" name="comment" placeholder="Type your comment" rows="3"></textarea><br>
				<button type="submit" class="btn btn-danger btn-lg ml-2">SUBMIT</button>
				<button type="reset" class="btn btn-primary btn-lg ">RESET</button>
				
			</div>
        </form>
		<?php
		require "post2.php";
		$sql7 = "SELECT * FROM comments";
		$result7 = mysqli_query($conn, $sql7);
							
		while($row = mysqli_fetch_assoc($result7)){
			$user = $row['Username'];
			$suggestions = $row['comment'];
			echo '<div class="media ml-5 mt-4">
				<img src="https://img.icons8.com/officel/64/000000/user.png" class="mr-3"> 
				<div class="media-body">
				
				<h6 class="mt-0" id = "d" style="font-weight:bold;">'.$suggestions.'</h6>
				<h5 class="mt-0 text-right" id="d" style="font-weight:900;">Posted by-->' .$user.'</h5>
															
				<hr>	
				</div>
				</div>';
		}
		?>
		<?php
		
		if($result6){
			echo '"<div class="alert alert-success" role="alert">
			Comment has been added
			</div"';
		}else{
			echo '"<div class="alert alert-danger" role="alert">
				comment not added.
				</div"';
		}
		?>
		
	</body>
</html>	