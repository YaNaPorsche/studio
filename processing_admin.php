<?php
session_start();
require 'connecting_db.php';

$login = isset($_POST['login']) ? $_POST['login'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';

$stmt = $pdo->prepare("SELECT password FROM admin WHERE login = :login");
$stmt->bindParam(':login', $login);
$stmt->execute();

$result = $stmt->fetch(PDO::FETCH_ASSOC);

if ($result && password_verify($password, $result['password'])) {
    $_SESSION['admin_logged_in'] = true;
    header('Location: index.php');
    exit();
} else {
    $_SESSION['errors'] = ['Неверный логин или пароль.'];
    header('Location: admin.php');
    exit();
}
