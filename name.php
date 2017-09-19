<?php
include_once('config.php');

/** Получаем наш ID статьи из запроса */
$name = ($_POST['name']);


$error = true;
/** Если нам передали ID то обновляем */

if(!$user = User::getUserByName($name)){
	/** Обновляем количество лайков в статье */
	
	$message ="";
	

	
	$error = false;
}else{
	/** Если ID пуст - возвращаем ошибку */
	
	$error = true;
	$message = 'User with such a name exists';
}


/** Возвращаем ответ скрипту */

// Формируем масив данных для отправки
$out = array(
	'error' => $error,
	'message' => $message
);

// Устанавливаем заголовот ответа в формате json
header('Content-Type: text/json; charset=utf-8');

// Кодируем данные в формат json и отправляем
echo json_encode($out);

