<?php
session_start();
$_SESSION = [];
session_destroy();
header('Location: index.php'); // Замените на ваш файл входа
exit();
