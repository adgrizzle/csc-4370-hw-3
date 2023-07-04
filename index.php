<!--
	Aaron Grizzle
	(solo, no partner)
	CSC 4370
	HW 3
	index.php
-->

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="nerdluv.css" type="text/css">
		<link rel="stylesheet" href="style.css" type="text/css">
		<title>NerdLuv - Home</title>
	</head>
	<body>
		<?php
			require_once "common.php";
			// Display the site header.
			display_header();
		?>
		
		<!-- Links -->
		<h1>Welcome!</h1>
		<div class="link">
			<img src="images/signup_icon.png" alt="Sign Up">
			<a href="signup.php">
				Sign up for a new account
			</a>
		</div>
		<div class="link">
			<img src="images/matches_icon.png" alt="See Matches">
			<a href="matches.php">
				Check your matches
			</a>
		</div>
		
		<?php
			// Display the site footer.
			display_footer();
		?>
	</body>
</html>