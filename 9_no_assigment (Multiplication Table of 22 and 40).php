<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title> 9_no_assigment (Multiplication Table of 22 and 40) </title>
	</head>
	<body>
		<h2> 9_no_assigment (Multiplication Table of 22 and 40) </h2> <br><br>

		<?php
			for ($i=22; $i <=40 ; $i++) 
				{ 
					echo 'Multiplication of ' . $i . '<br>';
					for ($j=1; $j <=10 ; $j++) 
					{ 
						echo $i . 'x' . $j . '=' . $i * $j . '<br>';
						if ($j == 10) 
						{
							echo "<br>"; // for one line spacing	
						}
					}
				}
		?>

	</body>
</html>