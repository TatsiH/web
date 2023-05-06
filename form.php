<!DOCTYPE html>
<html>
<head>
	<title>Форма</title>
</head>
<body>
	<h2>Форма ввода данных</h2>
	<form action="process.php" method="POST">
		<label for="name">Ваше имя:</label><br>
		<input type="text" id="name" name="name"><br>
		<label for="email">Ваш email:</label><br>
		<input type="email" id="email" name="email"><br>
		<label for="phone">Ваш номер телефона:</label><br>
		<input type="tel" id="phone" name="phone"><br>
		<input type="submit" value="Отправить">
	</form>
</body>
</html>
