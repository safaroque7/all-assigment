<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title> 3_no_assigment (spilt all full name) </title>
	</head>
	<body>
		
		<h2> 3_no_assigment (spilt all full name) </h2>
		<h2> take your full name with comma, spilt all full name. Take "Coders Trust Success Story" as array and make them a full sentence. </h2> <br><br>

		<?php

			$institution = ('Coders, Trust, Success, Story');

			$spilt = explode(',' , $institution);

			echo $spilt['0'];
			echo $spilt['1'];
			echo $spilt['2'];
			echo $spilt['3'];
		?>
	</body>
</html>