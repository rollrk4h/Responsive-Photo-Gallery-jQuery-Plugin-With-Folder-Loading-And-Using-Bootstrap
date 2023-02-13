<!DOCTYPE html>
<html lang="hu">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Responsive Photo Gallery jQuery Plugin With Folder Loading And Using Bootstrap</title>
		<link rel="Sterbina Roland logó" href="favicon.ico">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous"> <!-- Bootstrap3 -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous"> <!-- Bootstrap3 -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.2/css/bootstrap.min.css"> <!-- Bootstrap3 -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/4.0.1/ekko-lightbox.css"> <!-- lightbox -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/4.0.1/ekko-lightbox.min.css"> <!-- lightbox -->
		<link rel="stylesheet" href="css/hover.css"> <!-- Animations -->
		<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Bowlby+One"/> <!-- Only for Demo page -->
		<style>
			.modal-backdrop{
				z-index:-1;
			}
		</style>
	</head>
	<body>
		<div id="wrapper" class="container-fluid">
			<div id="example" class="container"> 
				<h1>The Example 1</h1>
				<?
					$id = "growing";
					$class = "col-lg-2 col-md-2 col-sm-3 col-xs-4";
					$liclass = "list-style:none !important;padding-left:0 !important;padding-right:0 !important;";
					$imgdiv = "photo_div";
					$imgclass = "out photo4 img-responsive";
					$imgstyle = "background-size: cover;background-position: 50% 50%;width:250px;height:250px;-webkit-box-shadow: inset 0px 0px 30px 0px rgba(0,0,0,1);-moz-box-shadow: inset 0px 0px 30px 0px rgba(0,0,0,1);box-shadow: inset 0px 0px 30px 0px rgba(0,0,0,1)";
					include 'example.php';
				?>
			</div> <!-- /container -->
		</div>
		<script src="js/jquery-latest.min.js"></script> <!-- latest jQuery -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script> <!-- Bootstrap3 -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.2/js/bootstrap.min.js"></script> <!-- Bootstrap3 -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/4.0.1/ekko-lightbox.js"></script> <!-- lightbox -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/4.0.1/ekko-lightbox.min.js"></script> <!-- lightbox -->
		<script src="js/scripts.js"></script> <!-- For Resize and Lightbox -->
	</body>
</html>