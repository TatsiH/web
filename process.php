<!DOCTYPE html>
<html>
<head>
	<title>Результаты формы</title>
</head>
<body>
	<h2>Результаты формы</h2>
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
