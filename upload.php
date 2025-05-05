<?php
session_start();
require "connecting_db.php";
// Проверка наличия файлов
if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_FILES["files"]["name"][0])) {
    $files = $_FILES["files"];

    $allowed_mime_types = ['image/jpeg', 'image/png', 'image/gif']; // Разрешенные типы файлов

    foreach ($files["name"] as $key => $filename) {
        $file_tmp = $files["tmp_name"][$key];
        $file_mime_type = $files["type"][$key];

        if (in_array($file_mime_type, $allowed_mime_types)) {
            $file_content = file_get_contents($file_tmp);
            $filename = htmlspecialchars(basename($filename)); // Безопасность: очистка имени файла

            try {
                $stmt = $pdo->prepare("INSERT INTO uploaded_files (filename, mime_type, content) VALUES (?, ?, ?)");
                $stmt->bindParam(1, $filename);
                $stmt->bindParam(2, $file_mime_type);
                $stmt->bindParam(3, $file_content, PDO::PARAM_LOB); // Используем PDO::PARAM_LOB для больших двоичных объектов
                $stmt->execute();
                echo "Файл $filename успешно загружен. <br>";
            } catch (PDOException $e) {
                echo "Ошибка при загрузке файла $filename: " . $e->getMessage() . "<br>";
            }
        } else {
            echo "Недопустимый тип файла для $filename. Разрешены: JPG, PNG, GIF.<br>";
        }
    }
    header("location:gallery.php");
    exit();
}
