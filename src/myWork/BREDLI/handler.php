<?php

require_once __DIR__ . '/mailer/Validator.php';
require_once __DIR__ . '/mailer/ContactMailer.php';

if (!Validator::isAjax() || !Validator::isPost()) {
	echo 'Доступ запрещен!';
	exit;
}

$name = isset($_POST['modal_name']) ? trim(strip_tags($_POST['modal_name'])) : null;
$phone = isset($_POST['modal_tel']) ? trim(strip_tags($_POST['modal_tel'])) : null;

if (empty($name) || empty($phone)) {
	echo 'Поля обязательны для заполнения.';
	exit;
}


if (!Validator::isValidPhone($phone)) {
	echo 'Телефон не соответствует формату.';
	exit;
}

if (ContactMailer::send($name, $phone)) {
	echo htmlspecialchars($name) . ', ваше сообщение успешно отправлено.';
} else {
	echo 'Произошла ошибка! Не удалось отправить сообщение.';
}
exit;