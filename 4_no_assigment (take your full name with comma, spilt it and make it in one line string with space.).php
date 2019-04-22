<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title> 4_no_assigment (take your full name with comma, spilt it and make it in one line string with space.) </title>
	</head>
	<body>

		<h2> 4_no_assigment (take your full name with comma, spilt it and make it in one line string with space.) </h2>
 <br><br>

		<?php
		
			$name = ('saiful, alam, faroque');

			$spilt = explode(',', $name);

			echo $spilt['0'] . $spilt['1'] . $spilt['2']; 

		?>
	</body>
</html>