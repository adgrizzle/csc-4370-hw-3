<?php
	function display_header() {
		$header = "
			<div id='bannerarea'>
				<img src='images/logo.png' alt='NerdLuv'><br>
				where meek geeks meet
			</div>";
		echo $header;
	}
	
	function display_footer() {
		$footer = "
		<div id='footer'>
			This page is for single nerds to meet and date each other!
			Type in your personal information and wait for the nerdly luv to begin!
			Thank you for using our site.
			<p>
				Results and page (C) Copyright NerdLuv Inc.
			</p>
			<div class='link'>
				<img src='images/back_icon.png' alt='Go Back'>
				<a href='index.php'>
					Back to front page
				</a>
			</div>
		</div>
		<a href='https://validator.w3.org/'>
		<img src='images/html5_icon.png' alt='HTML5 Validator'></a>
		<a href='https://jigsaw.w3.org/css-validator/'>
		<img src='images/css_icon.png' alt='CSS Validator'></a>";
		echo $footer;
	}
?>