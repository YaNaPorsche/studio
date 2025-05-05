<?php
session_start();
$errors = isset($_SESSION['errors']) ? $_SESSION['errors'] : [];
unset($_SESSION['errors']);
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Кулинарная студия Надежды Поморской</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />


    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&family=Tenor+Sans&display=swap"
        rel="stylesheet" />
</head>

<body class="d-flex flex-column min-vh-100">
    <section class="mt-xl-5 d-flex justify-content-center align-items-center flex-column flex-fill">
        <?php if (!empty($errors)): ?>
            <div style="color: red;">
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li><?php echo htmlspecialchars($error); ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>
        <form action="processing_admin.php" method="post"
            class="d-flex justify-content-center align-items-center flex-column  w-50 pt-2">
            <fieldset class="w-75">
                <legend class="text-center fs-5">Админристратор</legend>

                <div class="form-group mb-1 text-left">
                    <label for="login" class="form-label mb-0">Логин</label>
                    <input type="text" id="login" name="login" class="form-control" required>
                </div>
                <div class="form-group mb-1 text-left">
                    <label for="password" class="form-label mb-0">Пароль</label>
                    <input type="password" name="password" id="password" class="form-control" required>
                </div>
                <div class="form-group text-center mt-3 mb-3">
                    <button type="submit">Войти</button>
                </div>
            </fieldset>
        </form>
    </section>

</body>

</html>