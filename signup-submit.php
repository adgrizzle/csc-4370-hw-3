<!--
	Aaron Grizzle
	(solo, no partner)
	CSC 4370
	HW 3
	signup-submit.php
-->

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="nerdluv.css" type="text/css">
		<link rel="stylesheet" href="style.css" type="text/css">
		<title>NerdLuv - You're signed up!</title>
	</head>
	<body>
		<?php
			require_once "common.php";
			// Display the site header.
			display_header();
			
			// Get the values provided by the user.
			$name = $_GET['name'];
			$gender = $_GET['gender'];
			$age = $_GET['age'];
			$type = $_GET['type'];
			$os = $_GET['os'];
			$min = $_GET['min'];
			$max = $_GET['max'];
			
			// Write the new user's data to the existing file.
			$string = "$name,$gender,$age,$type,$os,$min,$max";
			$file = fopen("singles.csv", "a");
			fwrite($file, "\n");
			fwrite($file, $string);
			fclose($file);
			
			// Display a message to the user.
			$message = "
			<h1>Thank you!</h1>
			<p>Welcome to NerdLuv, $name!</p>
			<p>Now <a href='matches.php'>log in to see your matches!</a>";
			echo $message;
			
			// Display the site footer.
			display_footer();
		?>
	</body>
</html>