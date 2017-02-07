<?php
session_start();
include 'connect.php';
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<link rel="stylesheet" type="text/css" href="../style/style.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js">
	</script>

	<script>
    	// Preload configuration
    	$( document ).on( "mobileinit", function() {
    	    $.mobile.autoInitializePage = false;
    	});
	</script>

	<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js">
	</script>


	<script src="../script/swipeUpDownPlugin.js">
	</script>

	<title>brainwars</title>
</head>
<body>
	<div class="wrapper" id="wrapper">
		<?php
		if($_GET) {
			switch ($_GET['page']) {
				case 'home':
					include 'pages/start_form.php';  
					break;
				case 'highscore':
					include 'pages/highscore.php';
					break;
				case 'uitleg':
					include 'pages/uitleg.php';
					break;
				case 'spel':
					include 'pages/spel.php';
					break;
				case 'game_over':
					include 'pages/end_game.php';
					break;
			}
		} else {
			include 'pages/start_form.php'; 
		}
		?>
	</div>

	<footer>
		<?php
			include'pages/footer.php';
		?>
	</footer>
</body>
</html>