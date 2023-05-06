<?php

// Получаем данные из формы
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Проверяем, заполнены ли все обязательные поля
if (empty($name) || empty($email) || empty($message)) {
	// Если есть пустые поля, отправляем пользователя обратно на страницу формы с сообщением об ошибке
	header('Location: example_form.html?error=1');
	exit;
}

// Формируем текст для сохранения в файл
$data = "Имя: $name\nEmail: $email\n\nСообщение:\n$message\n\n";

// Сохраняем данные в файл
$file = 'messages.txt';
$current = file_get_contents($file);
$current .= $data;
file_put_contents($file, $current);

// Перенаправляем пользователя на страницу с подтверждением отправки формы
header('Location: example_form.html?success=1');
exit;

?>
