<!--
	Aaron Grizzle
	(solo, no partner)
	CSC 4370
	HW 3
	signup.php
-->

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="nerdluv.css" type="text/css">
		<link rel="stylesheet" href="style.css" type="text/css">
		<title>NerdLuv - Sign Up</title>
	</head>
	<body>
		<?php
			require_once "common.php";
			// Display the site header.
			display_header();
		?>
		
		<!-- Sign up form -->
		<form action="signup-submit.php" method=“post”>
			<fieldset>
				<legend>New User Signup:</legend>
				<div class="field">
					<strong><label for="name">Name:</label></strong>
					<input type="text" name="name" size="16">
				</div>
				<div class="field">
					<strong><label for="gender">Gender:</label></strong>
					<input type="radio" name="gender" value="M">
					Male
					<input type="radio" name="gender" value="F">
					Female
				</div>
				<div class="field">
					<strong><label for="age">Age:</label></strong>
					<input type="text" name="age" size="6" maxlength="2">
				</div>
				<div class="field">
					<strong><label for="type">Personality type:</label></strong>
					<input type="text" name="type" size="6" maxlength="4">
					(<a href="https://www.humanmetrics.com/personality">Don't know your type?</a>)
				</div>
				<div class="field">
					<strong><label for="os">Favorite OS:</label></strong>
					<select name="os">
						<option value="Windows">Windows</option>
						<option value="Mac OS X">Mac OS X</option>
						<option value="Linux">Linux</option>
					</select>
				</div>
				<div class="field">
					<strong><label for="age">Seeking age:</label></strong>
					<input type="text" name="min" size="6" placeholder="min" maxlength="2">
					to
					<input type="text" name="max" size="6" placeholder="max" maxlength="2">
				</div>
				<input type="submit" value="Sign Up">
			</fieldset>
		</form>
		
		<?php
			// Display the site footer.
			display_footer();
		?>
	</body>
</html>