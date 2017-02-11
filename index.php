<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<meta charset="UTF-8">
		<title>Hello there</title>
	</head>

	<body>
		<h1>Hi there!</h1>
		<p><img alt= "esimene pilt" src="images/pilt.jpg"></p>
		
		<h1>The End!!! !!!!</h1>
		
		<?php 
			$host = "localhost";
			$user = "test";
			$pass = "t3st3r123";
			$db = "test";

			$l = mysqli_connect($host, $user, $pass, $db);
			mysqli_query($l, "SET CHARACTER SET UTF8") or
					die("Error, ei saa andmebaasi charsetti seatud");
					
			
			$result = mysqli_query($l, "SELECT id, data FROM 10162828_andmed");
			echo $result->num_rows;
			
			mysqli_close($l);
		?>
		
		
		
		
	</body>

</html>
