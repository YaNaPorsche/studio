<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Кулинарная студия Надежды Поморской</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2jOqE56ODykKlT+TvWJontguKDu" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&family=Tenor+Sans&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2jOqE56ODykKlT+TvWJontguKDu" crossorigin="anonymous">
</head>
<style>
    form {
        border: none;
    }

    input {
        border: none;
    }

    button {
        background-color: #FD9FA2;
        color: black;
        border: 2px solid transparent;
        transition: background-color 0.3s ease, color 0.3s ease, border-color 0.3s ease;
        /* Плавный переход для кнопок */
        padding: 10px 20px;
        font-size: 16px;
        border-radius: 30px;
    }

    button:hover {
        background-color: #FD9FA2;
        color: white;
        border-color: white;
        transform: scale(1.05);
        /* Увеличение кнопки при наведении */
    }
</style>

<body class="mr-3 ml-3">
    <form action="upload.php" method="post" enctype="multipart/form-data" class="m-5">
        <input type="file" name="files[]" multiple>
        <button type="submit">Загрузить</button>
    </form>
</body>

</html>