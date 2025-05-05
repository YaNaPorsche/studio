<?php
$host = 'MySQL-8.0';
$db = 'studio'; // Имя базы данных
$user = 'nzuzrzgd'; // Имя пользователя
$pass = '5xfd1J'; // Пароль

try {
    //Создание подключения

    $pdo = new PDO("mysql:host=$host;dbname=$db;chatset=utf8", $user, $pass);
    //Установка режима ошибок
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Ошибка подключения: " . $e->getMessage();
}
