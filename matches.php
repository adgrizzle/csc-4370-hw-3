<!--
	Aaron Grizzle
	(solo, no partner)
	CSC 4370
	HW 3
	matches.php
-->

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="nerdluv.css" type="text/css">
		<link rel="stylesheet" href="style.css" type="text/css">
		<title>NerdLuv - Matches</title>
	</head>
	<body>
		<?php
			require_once "common.php";
			// Display the site header.
			display_header();
		?>
		
		<!-- Matches form -->
		<form action="matches-submit.php" method=“get”>
			<fieldset>
				<legend>Returning User:</legend>
				<div class="field">
					<strong><label for="name">Name:</label></strong>
					<input type="text" name="name" size="16">
				</div>
				<input type="submit" value="View My Matches">
			</fieldset>
		</form>
		
		<?php
			// Display the site footer.
			display_footer();
		?>
	</body>
</html>