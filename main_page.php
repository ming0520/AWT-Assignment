<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>QIUP CCA Portal</title>
	<?php include 'includes/bootstrapH.inc.php'; ?>
	<?php include 'includes/bootstrapF.inc.php'; ?>

	
	
	<!--Google font style-->
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab|Dosis" rel="stylesheet">

	
</head>

<body>

	<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	
	<style>
		.container { margin: 150px auto; }
	</style>
	
	
	<div id="carouselExampleIndicators" class="carousel slide my-carousel" data-ride="carousel">
	  <ol class="carousel-indicators">
		<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	  </ol>
	  <div class="carousel-inner">
		<div class="carousel-item active carousel-item-left">
		  <img class="d-block w-100" src="src/assets/pic1.png" alt="First slide">
		</div>
		<div class="carousel-item carousel-item-next carousel-item-left">
		  <img class="d-block w-100" src="src/assets/pic2.png" alt="Second slide">
		</div>
		<div class="carousel-item">
		  <img class="d-block w-100" src="src/assets/pic3.jpg" alt="Third slide">
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
	
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script src="Touch-Swipe-Bootstrap-Carousel/dist/bootstrap-swipe-carousel.js"></script>
	
	<script>
		const carouselEl = $('.my-carousel');

		// Bootstrap carousel needs to be loaded first
		carouselEl.carousel().swipeCarousel({
		  sensitivity: 'high' // low, medium or high
		});
	</script>
	
	<!--<script>
		function loadDoc(){
			var xhttp;
			if(window.XMLHttpRequest){
				xhttp = new XMLHttpRequest(); 
			}
			else{				
				xhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
		
			
			xhttp.onreadystatechange = function(){	
				if(xhttp.readyState == 4 && xhttp.status == 200)			
				{
					document.getElementById("ig").innerHTML = this.responseText;
				}	
			}
			
			xhttp.open("GET", "//api.instagram.com/v1/users/2093101329/media/recent/?access_token=2093101329.0e4abd3.d017a21b3e6e45408126e42cf0940d79", true);	
			xhttp.send();	
		}
	</script>
	
	<div id="ig"></div>-->

</body>


</html>