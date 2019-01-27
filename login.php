<?php 

	if(isset($_SESSION['id'])){
		header('Location: logout.php');
	}
	require_once "config.php";
// comment
	$loginURL = $gClient->createAuthUrl();
 ?>

<!DOCTYPE html>
<html>

<head>
	<title>Login</title>
	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	
	<?php include 'includes/bootstrapH.inc.php'; ?>
	
	<!--Bootstrap CSS-->
	<link rel="stylesheet" href="tiles-transitions-slider/example/octagon.css">
	
	<!--CSS Stylesheet-->
	<link rel="stylesheet" href="src\css\styles_login.css" type="text/css">
	
	<!--Google font style-->
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab|Dosis" rel="stylesheet">
</head>

<?php include 'simpleNav.php';?>

<body>
	
	<div class="form_box">
		<a href="http://www.qiup.edu.my" target="_blank"><img src="src\assets\quest_logo.png"></a>
		<h1 id="login_title">Quest International University Perak</h1>
		<h2 id="login_portal">CCA Portal</h2>
		<p class="form_element">Login now to discover upcoming CCA events & activities</p>
		
		<div class="octagon" id="octagon">
			<img src="src/assets/hex1.png">
			<img src="src/assets/hex2.jpg">
			<img src="src/assets/hex3.png">
			<img src="src/assets/hex4.png">
			<img src="src/assets/hex5.jpg">
		</div>
		
		<button type="button" onclick="window.location = '<?php echo $loginURL ?>';" class="btn btn-outline-danger btn-block"><i class="fab fa-google"></i> SIGN IN WITH GOOGLE</button>
	</div> <!-- END form_box -->
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$(".form_box").fadeIn(1500);
		});

	</script>
	
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT" crossorigin="anonymous"></script>
	<script src="tiles-transitions-slider/jquery.tiles-slider.js"></script>
	<script src="tiles-transitions-slider/example/app.js"></script>
	
	<div class="footer">
		<h4>Stay Connected</h4>
		<div class="links">
			<a href="https://www.facebook.com/QuestInternationalUniversityPerak/" target="_blank"><i class="fa fa-facebook-square"></i></a>
			<a href="https://twitter.com/qiup_edu?lang=en"  target="_blank"><i class="fa fa-twitter-square"></i></a>
			<a href="https://www.instagram.com/qiup_edu/?hl=en"  target="_blank"><i class="fa fa-instagram"></i></a>
			<a href="http://www.qiup.edu.my/" target="_blank"><i class="fa fa-globe" ></i></a>
			<a href="mailto:enquiries@qiup.edu.my" target="_blank"><i class="fa fa-envelope-o"></i></a>
			<a href="tel:+6052490500" target="_blank"><i class="fa fa-phone"></i></a>
		</div> <!-- END links -->
		<p>Copyright 2019 &copy; Tan, Seb, Jason, Reshmi</p>
	</div> <!-- END footer -->
</body>
<?php include 'includes/bootstrapF.inc.php'; ?>
</html>
