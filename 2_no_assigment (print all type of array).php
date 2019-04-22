<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title> 2_no_assigment (print all type of array) </title>
	</head>
	<body>
		<h2> 2_no_assigment (print all type of array) </h2>
		<h2> print all type of array , print all the string function </h2> <br><br>

		<h3> no. 1 Indexed arrays example </h3>
		<?php
			$name 	= 	array
			(
				'kamal',
				'jamal',
				'faroque',
				'akash'
			);	
			echo 'this is the first array element ' . $name['0'] . '<br>';
			echo 'this is the 2nd array element ' . $name['1']. '<br>';
			echo 'this is the third array element ' . $name['2']. '<br>';
			echo 'this is the fourth array element ' . $name['3']. '<br>';

		?>
		<h3> no. 2 Associative arrays example </h3>
			<?php
				$office = array
				(
					'editor'			=>	'naem nizam',
					'executive_editor'	=>	'peer habibur rahman',
					'news_editor'		=>	'kamal mahmud',
					'chief_news_editor'	=>	'monjur'
				);
				echo 'Our editor name is' . $office['editor'] . '<br>';
				echo 'Our executive name is' . $office['executive_editor'] . '<br>';
				echo 'Our news editor name is' . $office['news_editor'] . '<br>';
				echo 'Our chief news editor name is' . $office['chief_news_editor'] . '<br>';
			?>

		<h3> no. 3 multidimention arrays example </h3>	
		<?php
			$bangladesh	=	array
			(
				array
				(
					'dhaka',
					'chittagong',
					'rajshahi',
					'khulna',
					'sylhet',
					'mymensingha'	
				),

				array
				(
					'faridpur',	
					'narayanganj'	
				),

			);
				echo $bangladesh['1']['0'] . ' is a district in dhaka division <br>';
				echo $bangladesh['1']['1'] . ' is a district in dhaka division';
		?>
	</body>
</html>