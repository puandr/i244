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
								
			$result = mysqli_query($l, "SELECT * FROM 10162828_andmed");
		
			$table = '10162828_andmed';
			$fields_num = mysqli_num_fields($result);

			echo "<h1>Table: {$table}</h1>";
			echo "<table border='1'><tr>";
			// printing table headers
			for($i=0; $i<$fields_num; $i++)
			{
				$field = mysqli_fetch_field($result);
				echo "<td>{$field->name}</td>";
			}
			echo "</tr>\n";
			// printing table rows
			while($row = mysqli_fetch_row($result))
			{
				echo "<tr>";

				// $row is array... foreach( .. ) puts every element
				// of $row to $cell variable
				foreach($row as $cell)
					echo "<td>$cell</td>";

				echo "</tr>\n";
			}
			mysqli_free_result($result);			
						
			mysqli_close($l);
		?>
		
		
		
		
	</body>

</html>
