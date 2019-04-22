<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title> 8_no_assigment (Find even numbers between 1 to 20).php </title>
	</head>
	<body>
		<h2> 8_no_assigment (Find even numbers between 1 to 20).php </h2> <br><br>

		<?php
			for ($i=1; $i <=20 ; $i++) 
			{ 
				if( $i % 2 === 1)
				{
					echo $i . ' is odd. <br>';
				} else
				{
					echo $i . ' is even. <br> ';
				}
			}
		?>

	</body>
</html>