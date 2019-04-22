<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title> 5_take 3 names, find the shortest name </title>
	</head>
	<body>

		<h2> take 3 names , find the shortest name , if the name's length is odd, print the name+ you are different, if even print name + you are general. </h2>
 <br><br>

		<?php
			$name_1	= 'kamal';
			$name_2 = 'jahangir';	
			$name_3 = 'rana';

			$name_1_char = strlen($name_1);
			$name_2_char = strlen($name_2);
			$name_3_char = strlen($name_3);

			$shortest = ' is the shortest name.';

			if($name_1_char < $name_2_char && $name_1_char < $name_3_char)
			{
				echo $name_1 . $shortest;
			} 
			elseif($name_2_char < $name_3_char && $name_2_char < $name_1_char)
			{
				echo $name_2 . $shortest;
			} 
			else
			{
				echo $name_3 . $shortest;
			}	

			echo '<br><br>';

			if($name_1_char % 2 === 1)
			{
				echo $name_1 . ' name\'s length is odd. ' . $name_1 . ', you are different. <br>' ;
			} 
			else
			{
				echo $name_1 . ' name\'s length is even. ' . $name_1 . ', you are general. <br>' ;
			}

			if($name_2_char % 2 == 1)
			{
				echo $name_2 . ' name\'s length is odd. ' . $name_2 . ', you are different. <br>'; 
			}
			else
			{
				echo $name_2 . ' name\'s length is even. ' . $name_2 . ', you are general. <br>'; 	
			}

			if($name_3_char % 2 == 1)
			{
				echo $name_3 . ' name\'s length is odd. ' . $name_3 . ', you are different. <br>'; 
			}
			else
			{
				echo $name_3 . ' name\'s length is even. ' . $name_3 . ', you are general. <br>'; 	
			}

		?>


	</body>
</html>