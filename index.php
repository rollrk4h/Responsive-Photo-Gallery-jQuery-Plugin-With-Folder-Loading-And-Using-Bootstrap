<!DOCTYPE html>
<html lang="en">
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
		<link rel="stylesheet" href="css/demo.css"> <!-- Only for Demo page -->
		<link rel="stylesheet" href="css/hover.css"> <!-- Animations -->
		<link rel="stylesheet" href="css/prism.css"> <!-- Only for Demo page -->
		<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Bowlby+One"/> <!-- Only for Demo page -->
	</head>
	<body>
		<div id="totop"><a data-scroll href="#wrapper" class="totoparrow glyphicon glyphicon-chevron-up"></a></div>
		<div id="wrapper" class="container-fluid">
			<div class="header row">
				<h1>Responsive Photo Gallery jQuery Plugin With Folder Loading And Using Bootstrap<br>Example Page</h1>
				<h4><br>A very simple jQuery plugin helps you to create a responsive photo gallery from a specified folder using Bootstrap3. When you click on a thumbnail, it will popup a lightbox gallery with navigation.</h4>
				<br><br>
				<nav class='cf'>
					<ul class='cf'>
						<li>
							<a data-scroll href='#wrapper'>Home</a>
						</li>
						<li>
							<a data-scroll href='#usage'>Usage</a>
						</li>
						<li>
							<a data-scroll href='#example'>Examples</a>
						</li>
						<li>
							<a data-scroll href='#download'>Download</a>
						</li>
					</ul>
					<a href='#' id='openup'>MENU</a>
				</nav>

				<h2 id="usage"><br>How to use it:</h2>
				<h4>1. Meta viewport for responsive grids.</h4>
				<pre><code class="language-markup">
				&lt;meta http-equiv="Content-Type" content="text/html; charset=utf-8">
				&lt;meta name="viewport" content="width=device-width, initial-scale=1">
				</code></pre>
				<h4>2. Load jquery-latest.min.js for the jQuery plugin.</h4>
				<pre><code class="language-markup">
				&lt;script src="js/jquery-latest.min.js">&lt;/script>
				</code></pre>
				<h4>3. Load javascript files.</h4>
				<pre><code class="language-markup">
				&lt;script src="js/scripts.js">&lt;/script>
				&lt;script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.2/js/bootstrap.min.js">&lt;/script>
				&lt;script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/4.0.1/ekko-lightbox.js">&lt;/script>
				&lt;script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/4.0.1/ekko-lightbox.min.js">&lt;/script>
				</code></pre>
				<h4>4. Load bootstrap and lightbox css files.</h4>
				<pre><code class="language-markup">
				&lt;link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
				&lt;link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
				&lt;link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.2/css/bootstrap.min.css">
				&lt;link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/4.0.1/ekko-lightbox.css">
				&lt;link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/4.0.1/ekko-lightbox.min.css">
				</code></pre>
				<h4>5. Load demo.css for the styles.</h4>
				<pre><code class="language-markup">
				&lt;link rel="stylesheet" href="css/demo.css">
				</code></pre>
				<h4>6. Load hover.css for the animations.</h4>
				<pre><code class="language-markup">
				&lt;link rel="stylesheet" href="css/hover.css">
				</code></pre>			
				<h4>7. The PHP include with parameters.</h4>
				<pre><code class="language-php">
				&lt;?
					$id = "growing"; * For the responsive script *
					$class = "col-lg-2 col-md-2 col-sm-3 col-xs-4"; * For the responsive style *
					$liclass = "list-style:none !important;padding-left:0 !important;padding-right:0 !important;"; * For the li style *
					$imgdiv = "photo_div"; * For the responsive script *
					$imgclass = "out photo4 img-responsive"; * For the image style and animation *
					$imgstyle = "background-size: cover;background-position: 50% 50%;width:250px;height:250px;-webkit-box-shadow: inset 0px 0px 30px 0px rgba(0,0,0,1);-moz-box-shadow: inset 0px 0px 30px 0px rgba(0,0,0,1);box-shadow: inset 0px 0px 30px 0px rgba(0,0,0,1)"; * Image style *
					include 'example.php'; * include the php *
				?>
				</code></pre>
				<h4>8. The echo: Use parameters for styling and showing the pictures. (Included in example.php)</h4>
				<pre><code class="language-markup">
				echo '&lt;li id="'.$id.'" class="'.$class.'" style="'.$liclass.'">&lt;a href="'.$directory.'/'.$file.'" data-toggle="lightbox" data-gallery="multiimages" data-title="'.$filename.'">&lt;div  id="'.$imgdiv.'"  class="'.$imgclass.'" style="background:url('.$directory.'/'.$file.');'.$imgstyle.'">&lt;/div>&lt;/a>&lt;/li>';		
				</code></pre>
				<h4>9. Load and setup the lightbox. (Included in scripts.js)</h4>
				<pre><code class="language-markup">
				&lt;script>
					$(document).delegate('*[data-toggle="lightbox"]', 'click', function(event) {
						event.preventDefault();
						$(this).ekkoLightbox();
					});
				&lt;/script>
				</code></pre>
				<h4>10. Responsive resize. (Included in scripts.js)</h4>
				<pre><code class="language-php">
				/* RESIZE WHEN LOAD THE PAGE */

				$(window).load(function() {

					$('li #photo_div').each(function() { // Select li image div
						var width = $(this).width();    // Current image width
						$(this).css("width", width); // Set new width
						$(this).css("height", width);  // Set new height

				   });
				});

				/* RESIZE WHEN CHANGE WINDOW */

				$(window).resize(function() {	// Resize function
					var width2 = $('#growing').width();    // Current image width
					$('li #photo_div').css("width", width2); // Set new width
					$('li #photo_div').css("height", width2);  // Set new height
				});

				/* CALL THE RESIZE */

				$(window).resize(); // Immediately run
				</code></pre>
				<h4>11. HTML Structure example (copy & paste and it will be works)</h4>
				<a href="http://sterbinaroland.eu/script/demo.php" style="color:black !important;"><h4>Live Demo</h4></a>
				<pre><code class="language-php">
				&lt;!DOCTYPE html>
				&lt;html lang="en">
					&lt;head>
						&lt;meta http-equiv="Content-Type" content="text/html; charset=utf-8">
						&lt;meta name="viewport" content="width=device-width, initial-scale=1">
						&lt;link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous"> &lt;!-- Bootstrap3 -->
						&lt;link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous"> &lt;!-- Bootstrap3 -->
						&lt;link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.2/css/bootstrap.min.css"> &lt;!-- Bootstrap3 -->
						&lt;link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/4.0.1/ekko-lightbox.css"> &lt;!-- lightbox -->
						&lt;link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/4.0.1/ekko-lightbox.min.css"> &lt;!-- lightbox -->
						&lt;link rel="stylesheet" href="css/hover.css"> &lt;!-- Animations -->
						&lt;link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Bowlby+One"/> &lt;!-- Only for Demo page -->
						&lt;style>
							.modal-backdrop{
								z-index:-1; // hack for the modal
							}
						&lt;/style>
					&lt;/head>
					&lt;body>
						&lt;div id="wrapper" class="container-fluid">
							&lt;div id="example" class="container"> 
								&lt;h1>The Example 1&lt;/h1>
								&lt;?
									$id = "growing";
									$class = "col-lg-2 col-md-2 col-sm-3 col-xs-4";
									$liclass = "list-style:none !important;padding-left:0 !important;padding-right:0 !important;";
									$imgdiv = "photo_div";
									$imgclass = "out photo4 img-responsive";
									$imgstyle = "background-size: cover;background-position: 50% 50%;width:250px;height:250px;-webkit-box-shadow: inset 0px 0px 30px 0px rgba(0,0,0,1);-moz-box-shadow: inset 0px 0px 30px 0px rgba(0,0,0,1);box-shadow: inset 0px 0px 30px 0px rgba(0,0,0,1)";
									include 'example.php';
								?>
							&lt;/div> &lt;!-- /container -->
						&lt;/div>
						&lt;script src="js/jquery-latest.min.js">&lt;/script> &lt;!-- latest jQuery -->
						&lt;script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous">&lt;/script> &lt;!-- Bootstrap3 -->
						&lt;script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.2/js/bootstrap.min.js">&lt;/script> &lt;!-- Bootstrap3 -->
						&lt;script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/4.0.1/ekko-lightbox.js">&lt;/script> &lt;!-- lightbox -->
						&lt;script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/4.0.1/ekko-lightbox.min.js">&lt;/script> &lt;!-- lightbox -->
						&lt;script src="js/scripts.js">&lt;/script> &lt;!-- For Resize and Lightbox -->
					&lt;/body>
				&lt;/html>
				</code></pre>				
			</div>
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
			<div id="example" class="container"> 
				<h1>The Example 2</h1>
				<ul>
				<?
					$id = "growing";
					$class = "col-lg-2 col-md-2 col-sm-3 col-xs-4";
					$liclass = "list-style:none !important;padding-left:0 !important;padding-right:0 !important;";
					$imgdiv = "photo_div";
					$imgclass = "photo img-responsive";
					$imgstyle = "background-size: cover;background-position: 50% 50%;width:200px;height:200px;border: 2px solid #000;-webkit-border-radius: 10px;-moz-border-radius: 10px;border-radius: 10px;";
					include 'example.php';
				?>
				</ul>
			</div> <!-- /container -->
			<div id="example" class="container"> 
				<h1>The Example 3</h1>
				<ul>
				<?
					$id = "growing";
					$class = "col-lg-2 col-md-2 col-sm-3 col-xs-4";
					$liclass = "list-style:none !important;padding-left:0 !important;padding-right:0 !important;";
					$imgdiv = "photo_div";
					$imgclass = "hvr-wobble-vertical photo2 img-responsive";
					$imgstyle = "background-size: cover;background-position: 50% 50%;width:200px;height:200px;border: 2px solid #000;-webkit-border-radius: 50%;-moz-border-radius: 50%;border-radius: 50%;";
					include 'example.php';
				?>
				</ul>
			</div> <!-- /container -->
			<div id="example" class="container"> 
				<h1>The Example 4</h1>
				<ul>
				<?
					$id = "growing";
					$class = "col-lg-2 col-md-2 col-sm-3 col-xs-4";
					$liclass = "list-style:none !important;padding-left:0 !important;padding-right:0 !important;";
					$imgdiv = "photo_div";
					$imgclass = "hvr-bounce-in img-responsive";
					$imgstyle = "background-size: cover; -webkit-border-radius: 99px 0px 99px 0px;-moz-border-radius: 99px 0px 99px 0px;border-radius: 99px 0px 99px 0px;border:4px solid #7AA2FF;background-color:#E3A20B;-webkit-box-shadow: #B3B3B3 5px 5px 5px;-moz-box-shadow: #B3B3B3 5px 5px 5px; box-shadow: #B3B3B3 5px 5px 5px;";
					include 'example.php';
				?>
				</ul>
			</div> <!-- /container -->		
			<div id="download" class="footer row">
				<h1><br>Download necessary files:</h1>
				<a href="http://getbootstrap.com" class="download_text"><h4>Bootstrap3</h4></a>
				<a href="https://github.com/ashleydw/lightbox" class="download_text"><h4>Lightbox</h4></a>
				<a href="http://ianlunn.github.io/Hover/" class="download_text"><h4>Hover.css</h4></a>
				<h1><br>or download the .zip from github:</h1>
				<a href="https://github.com/rollrk4h/folder-loader-reponsive-photo-gallery/archive/master.zip" class="download_text"><h4>Download</h4></a>
			</div>
		</div>
		<script src="js/jquery-latest.min.js"></script> <!-- latest jQuery -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script> <!-- Bootstrap3 -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.2/js/bootstrap.min.js"></script> <!-- Bootstrap3 -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/4.0.1/ekko-lightbox.js"></script> <!-- lightbox -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/4.0.1/ekko-lightbox.min.js"></script> <!-- lightbox -->
		<script src="js/prism.js"></script> <!-- Only for Demo page -->
		<script src="js/smooth-scroll.js"></script> <!-- Only for Demo page -->
		<script src="js/scripts_demo.js"></script> <!-- Only for Demo page -->
		<script src="js/scripts.js"></script> <!-- For Resize and Lightbox -->
	</body>
</html>