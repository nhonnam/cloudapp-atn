<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=0.6">
	<title>ATN Database - Home</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  	<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
  	<link href="https://fonts.googleapis.com/css2?family=Allison&display=swap" rel="stylesheet">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="index.css">
</head>
<body>
	<header>
		<div class="nav-bar">
			<div><a class="nav" id="login" href="login.php">Log In to The Database</a></div>
		</div>
	</header>
	<main>
		<div class="logo_search-bar_menu">
			<div><img class="logo" src="image/logo.png" alt="logo"><span>Toy Store<span></div>
			<p>Welcome to Chain Stores of ATN!</p>
		</div>
		<div class="container"> 
  			<div id="Carousel" class="carousel slide" data-ride="carousel">
    			<ol class="carousel-indicators">
      				<li data-slide-to="0" class="active"></li>
      				<li data-slide-to="1"></li>
      				<li data-slide-to="2"></li>
    			</ol>
    			<div class="carousel-inner">
      				<div class="item active">
        				<img class="slide" id="welcome" src="image/welcome.png" alt="Poster" style="width:100%;">
      				</div>
      				<div class="item">
        				<img class="slide" id="to" src="image/to.png" alt="Poster" style="width:100%;">
      				</div>    
      				<div class="item">
        				<img class="slide" id="atn" src="image/atn.png" alt="Poster" style="width:100%;">
      				</div>
    			</div>
    			<a class="left carousel-control" id="left-control" href="#Carousel" data-slide="prev">
      				<span class="glyphicon glyphicon-chevron-left"></span>
   		 		</a>
    			<a class="right carousel-control" id="right-control" href="#Carousel" data-slide="next">
      				<span class="glyphicon glyphicon-chevron-right"></span>
    			</a>
  			</div>
		</div>
	</main>
	<footer>
		<p>Contact me on:</p>
		<ul>
			<li><img src="image/phone.png"></span> 0395453691</li>
			<li><img src="image/facebook.png"><a id="link-fb" href="https://www.facebook.com/taotengivaybay" target="_blank"> Cậu Bé Vuôi Vẻ</a></li>
			<li><span><img src="image/gmail.png"> namntkgcd201381@fpt.edu.vn</span></li>
		</ul>
		<p>Copyright &copy 2022 ATN Stores. All rights reserved.<p>
	</footer>
</body>