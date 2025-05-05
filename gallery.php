<?php
session_start();
require "connecting_db.php";

$isLoggedIn = isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true;

// Подключение к базе данных
$stmt = $pdo->query("SELECT id, filename, mime_type, content FROM uploaded_files ORDER BY uploaded_at DESC");
$images = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Кулинарная студия Надежды Поморской</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2jOqE56ODykKlT+TvWJontguKDu" crossorigin="anonymous">
    <link rel="stylesheet" href="style_gall.css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&family=Tenor+Sans&display=swap" rel="stylesheet" />
</head>

<div class="container">

    <div class="row"><a href="index.php" class="btn"><button class="w-50">На главную</button></a>

        <div class=" mb-3">
            <h2>Наши фото</h2>
        </div>
        <?php if ($isLoggedIn): ?>
            <div class="col-12 d-flex align-items-center justify-content-center mb-3">
                <a href="add_files.php" class="btn btn-primary me-2">Добавить фото</a>

            </div>
        <?php endif; ?>
    </div>
</div>
<div class="gallery-container row">
    <?php if (count($images) > 0): ?>
        <?php foreach ($images as $image): ?>
            <div class="gallery-item col-6 col-sm-4 col-md-3 col-lg-2">
                <div class="d-flex flex-column align-items-center">
                    <img src="data:<?= htmlspecialchars($image['mime_type']) ?>;base64,<?= base64_encode($image['content']) ?>"
                        alt="<?php echo htmlspecialchars(pathinfo($image['filename'], PATHINFO_FILENAME)); ?>">
                    <?php if ($isLoggedIn): ?>
                        <form method="POST" action="delete_image.php" class="mt-2">
                            <input type="hidden" name="image_id" value="<?= htmlspecialchars($image['id']); ?>">
                            <button type="submit" class="btn btn-danger btn-sm">Удалить</button>
                        </form>
                    <?php endif; ?>
                </div>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p>Нет изображений для отображения.</p>
    <?php endif; ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>