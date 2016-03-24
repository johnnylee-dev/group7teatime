<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tea Time</title>
	<link rel="stylesheet" href="style/base.css">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<body>
	<!-- Banner -->
	<a href="index.html"><div id="banner" class="container-fluid">
		<img src="img/banner.png" alt="Banner Image">
	</div></a>

	<!-- Nav Bar -->
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid">
			<!-- Button for collapsing nav bar -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span> 
			        <span class="icon-bar"></span>
			  	</button>
		  		<a href="#"><img class="center-block" src="img/bannersmall.png" alt="Nav Bar Logo"></a>
	  		</div>

			<div class="collapse navbar-collapse" id="myNavbar">
		  		<ul class="nav navbar-nav">
					<li><a href="aboutus.php">About Us</a></li> 
					<li><a href="contactus.php">Contact Us</a></li>
					<li id="catalogue-dropdown" class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">Catalogue<span class="caret"></span></a>
			       			<ul class="dropdown-menu">
				          		<li><a href="catalogue.php#blackTea">Black</a></li>
					          	<li><a href="catalogue.php#greenTea">Green</a></li>
					         	<li><a href="catalogue.php#oolongTea">Oolong</a></li>
					          	<li><a href="catalogue.php#whiteTea">White</a></li>
				         		<li><a href="catalogue.php#puerhTea">Pu-Erh</a></li>
				        	</ul>
		        	</li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					 <?php
                        if(isset($_COOKIE["userid"]) && isset($_COOKIE["username"])) {
                            echo "<li id='menuaccount'><a href='account.php'>Account: " . $_COOKIE["username"] . "</a></li>";
                            echo "<li id='menulogout'><a href='logout.php'>Log out</a></li>";
                        } else {
                            echo "<li id='menulogin'><a href='login.php'>Log In/Sign Up</a></li>"; 
                        }  
                    ?>
		  		</ul>
	  		</div>
  		</div> 
	</nav>

	<!-- Main Section -->
	<div id="main" class="container"> 	
		<!-- NOTE TO TEAM: ONLY MAKE CHANGES WITHIN MAIN SECTION, DO NOT CHANGE ANYTHING OUTSIDE -->
		
		<!-- Carousel -->
		<div id="myCarousel" class="carousel slide">
			<!-- Indicators -->
			<ol class="carousel-indicators">
			  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			  <li data-target="#myCarousel" data-slide-to="1"></li>
			  <li data-target="#myCarousel" data-slide-to="2"></li>
			  <li data-target="#myCarousel" data-slide-to="3"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
			  <div class="item active">
			    <img src="img/teaplantation.jpg" alt="teapot">  
			  </div>
			  <div class="item">
			    <img src="img/teaplantation.jpg" alt="plantation">
			  </div>    
			  <div class="item">
			    <img src="img/teaplantation.jpg" alt="loosetea"> 
			  </div>
			  <div class="item">
			    <img src="img/teaplantation.jpg" alt="tea">
			  </div>  
			</div>

			<!-- Left and right controls -->
			<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			  <span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			  <span class="sr-only">Next</span>
			</a>
		</div> <!-- myCarousel -->

		<div id="welcome">
		Welcome: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris pharetra, augue ac scelerisque ornare, eros justo dapibus leo
		, at dictum turpis lacus sit amet neque. Etiam quis volutpat sem. Donec sit amet sollicitudin magna, eget laoreet purus. Etiam rhoncus imperdiet nisl.
		</div> 

		<div id="home-content">
		Etiam cursus augue in ipsum ullamcorper viverra. Sed tincidunt sapien nec velit tincidunt, eget viverra elit tempor. Nam porttitor aliquet pharetra. 
		Phasellus tempus, elit sit amet ornare vestibulum, dui est tempus magna, vitae suscipit metus nulla vitae mauris. Quisque ac risus fringilla, 
		dapibus dui non, placerat elit. Nam placerat, lacus id efficitur pulvinar, sapien metus dapibus risus, laoreet ullamcorper nisl turpis et elit. 
		Phasellus tellus felis, tempus vitae sodales in, feugiat eu mi. Cras ut libero ante. Interdum et malesuada fames ac ante ipsum primis in faucibus.
		Phasellus placerat et lorem a bibendum.
		</div>
	</div>

	<!-- Footer Section -->
	<footer class="footer">
		<div class="container-fluid">
			<ul>
				<li><a href="aboutus.html">About Us</a></li> 
				<li><a href="contactus.html">Contact Us</a></li>
				<li><a href="catalogue.html">Catalogue</a></li>
			</ul>
		</div>
	</footer>

</body> 

</html>  