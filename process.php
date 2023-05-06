<!DOCTYPE html>
<html>
<head>
	<title>Results</title>
</head>
<body>
	<h2>Results</h2>
	<?php
		if($_SERVER["REQUEST_METHOD"] == "POST") {
			$name = $_POST['name'];
			$email = $_POST['email'];
			$phone = $_POST['phone'];

			echo "<p>Meno: " . $name . "</p>";
			echo "<p>Email: " . $email . "</p>";
			echo "<p>Telefón: " . $phone . "</p>";
		}
	?>
</body>
</html>
