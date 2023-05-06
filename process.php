<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Math Cafe - Results</title>
    <link rel="stylesheet" href="style.css">
  </head>
<body>
	<h2>Results</h2>
	
	<?php
		if($_SERVER["REQUEST_METHOD"] == "POST") {
			$name = $_POST['name'];
			$email = $_POST['email'];
			$phone = $_POST['phone'];

			echo "<p>Имя: " . $name . "</p>";
			echo "<p>Email: " . $email . "</p>";
			echo "<p>Телефон: " . $phone . "</p>";
		}
	?>
</body>
</html>
