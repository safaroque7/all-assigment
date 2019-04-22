<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title> 6_no_assigment (Make two functions that sum and subtract two numbers and print it) </title>
	</head>
	<body>
		<h2> 6_no_assigment (Make two functions that sum and subtract two numbers and print it) </h2> <br><br>

		<?php

			//for sum
			function fnSum($a, $b)
			{	
				echo $a . '+' . $b . '=';
				return $a+$b;
			}

			echo fnSum(10, 10) . '<br>';


			//for subtract
			function fnsubtract($a, $b)
			{
				echo $a . '-'.  $b . '=';
				return $a - $b;
			}

			echo fnsubtract(10, 2);
		?>


	</body>
</html>