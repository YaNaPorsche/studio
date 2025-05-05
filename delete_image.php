<?php
session_start();
require "connecting_db.php";

// Проверка авторизации
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header("Location: admin.php");
    exit;
}

// Проверка, был ли отправлен запрос на удаление
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['image_id'])) {
    $image_id = intval($_POST['image_id']);

    // Подготовка запроса на удаление
    $stmt = $pdo->prepare("DELETE FROM uploaded_files WHERE id = :id");
    $stmt->bindParam(':id', $image_id, PDO::PARAM_INT);

    if ($stmt->execute()) {
        // Перенаправление обратно к галерее с сообщением об успешном удалении
        header("Location: gallery.php?message=Image deleted successfully");
        exit;
    } else {
        // Перенаправление в случае ошибки
        header("Location: gallery.php?error=Failed to delete image");
        exit;
    }
} else {
    echo "Invalid request.";
    exit;
}
