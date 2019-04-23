<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title> 10_no_assigment (Make a simple calculato) </title>
	</head>
	<body>
		<h2> 10_no_assigment (Make a simple calculato) </h2> <br><br>

		<?php

			//for sum
			function fnsum($a, $b)
			{	
				echo $a . '+' . $b . '=';
				return $a + $b;
			}

			//for subtract
			function fnsubtract($a, $b)
			{
				echo $a . '-' . $b . '=';
				return $a - $b;
			}

			//for subtract
			function fnmultiple($a, $b)
			{
				echo $a . 'x' . $b . '=';
				return $a * $b;
			}

			//for subtract
			function fndivision($a, $b)
			{
				echo $a . '/' . $b . '=';
				return $a / $b;
			}

			if(isset($_POST['plus']))
				{
					$number_1 = $_POST['number1'];
					$number_2 = $_POST['number2'];

					if(!empty($number_1) && !empty($number_2))
					{
						echo fnsum($number_1, $number_2);
					} 
					else
					{
						echo 'you have must entry something here';
					}
				}
				elseif(isset($_POST['minus']))
					{
						$number_1 = $_POST['number1'];
						$number_2 = $_POST['number2'];

						if(!empty($number_1) && !empty($number_2))
						{
							echo fnsubtract($number_1, $number_2);
						} 
						else
						{
							echo 'you have must entry something here';
						}
					}

				elseif(isset($_POST['multiple']))
					{
						$number_1 = $_POST['number1'];
						$number_2 = $_POST['number2'];

						if(!empty($number_1) && !empty($number_2))
						{
							echo fnmultiple($number_1, $number_2);
						} 
						else
						{
							echo 'you have must entry something here';
						}
					}

				elseif(isset($_POST['division']))
					{
						$number_1 = $_POST['number1'];
						$number_2 = $_POST['number2'];

						if(!empty($number_1) && !empty($number_2))
						{
							echo fndivision($number_1, $number_2);
						} 
						else
						{
							echo 'you have must entry something here';
						}
					}
			
		?>

		<form action="" method="POST">
			<input type="number" name="number1"> <br>
			<input type="number" name="number2"> <br>
			<input type="submit" name="plus" value="+">
			<input type="submit" name="minus" value="-">
			<input type="submit" name="multiple" value="x">
			<input type="submit" name="division" value="/">
		</form>

	</body>
</html>