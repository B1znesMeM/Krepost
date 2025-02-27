<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <?php require_once __DIR__ . '/components/head.php'; ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Войти</title>
</head>
<body class="login">

    <?php
        if (isset($_SESSION['auth_error'])) {
    ?>
    <div class="alert alert-danger" role="alert">
        Проверьность правильность введённых полей
    </div>
    <?php
    unset($_SESSION['fields']);
    }
    ?>

    <form action="actions/user/login.php" method="post" class="admin-form">

        <label for="name">Логин</label>
        <input type="text" name="name" id="name" class="admin-input" required>
        <label for="password">Пароль</label>
        <input type="password" name="password" id="password" class="admin-input" required>
        <button type="submit" class="admin-btn">Вход</button>

    </form>

    <p class="copyright">&copy;<span id="year"></span> Крепость | Все права защишены </p>

<?php require_once __DIR__ . '/components/script.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>