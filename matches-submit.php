<!--
	Aaron Grizzle
	(solo, no partner)
	CSC 4370
	HW 3
	matches-submit.php
-->

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="nerdluv.css" type="text/css">
		<link rel="stylesheet" href="style.css" type="text/css">
		<title>NerdLuv - View Matches</title>
	</head>
	<body>
		<?php
			require_once "common.php";
			// Display the site header.
			display_header();
			
			// Import data for all users from singles.csv.
			$singles = array_map('str_getcsv', file('singles.csv'));
			
			// Locate and store the current user's data.
			$name = $_GET['name'];
			$user = [];
			foreach ($singles as $s) {
				if ($s[0] == $name) {
					$user = $s;
					break;
				}
			}
			
			// If the user was not found, print an error message.
			// Otherwise, locate and store the user's matches.
			$matches = [];
			if ($user == []) {
				echo "User not found. Please try a different name.";
			} else {
				foreach ($singles as $s) {
					// Check the singles' gender.
					if ($s[1] == $user[1]) continue;
					// Check the singles' age.
					if ($s[2] < $user[5] || $s[2] > $user[6]) continue;
					// Check the singles' OS.
					if ($s[4] != $user[4]) continue;
					// Check the singles' type.
					$s_type = str_split($s[3]);
					$user_type = str_split($user[3]);
					$type_count = 0;
					for ($i = 0; $i < 4; $i++) {
						if ($s_type[$i] == $user_type[$i]) {
							$type_count++;
						}
					}
					if ($type_count < 1) continue;
					// If all checks passed, add singles' data to array of matches.
					array_push($matches, $s);
				}
				echo "<h1>Matches for $name</h1>";
			}
			
			// Return the formatted HTML for each match.
			foreach ($matches as $m) {
				$str ="
				<div class='match'>
					<img src='images/user.png' alt='User'>
					<p>$m[0]</p>
					<ul>
						<li><strong>gender:</strong>$m[1]</li>
						<li><strong>age:</strong>$m[2]</li>
						<li><strong>type:</strong>$m[3]</li>
						<li><strong>OS:</strong>$m[4]</li>
					</ul>
				</div>";
				echo $str;
			}
			
			// Display the site footer.
			display_footer();
		?>
	</body>
</html>
