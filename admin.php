<?php
session_start();

if(!isset($_SESSION['user'])) {
    header('Location: /login.php');
}

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <?php require_once __DIR__ . '/components/head.php'; ?>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Админка</title>
</head>
<body>
    
<nav class="nav-admin">

    <li><a href="admin.php">Вся недвижимость</a></li>

</nav>

<div class="container">

<form action="/add.php" method="post" style="padding: 20px; padding-left: 0px">
    <button type="submit" class="btn btn-success" style="width: 300px; padding: 10px">Добавить</button>
</form>

    <table class="table table-striped">

    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Название</th>
        <th scope="col">Описание</th>
        <th scope="col">Цена</th>
        <th scope="col">Картинка</th>
        <th scope="col">Действие</th>
        </tr>
    </thead>

    <tbody>

        <?php 
        $items = $db->query("SELECT * FROM `items` ORDER BY `id` DESC")->fetchAll(PDO::FETCH_ASSOC);

        foreach ($items as $item) {
        ?>

        <tr>

        <th scope="row"><?= $item['id'] ?></th>
            <td><?= $item['title'] ?></td>
            <td><?= substr($item['description'], 0, 100) . '...'; ?></td>
            <td><?= $item['price'] . '₽' ?></td>
            <td><img src="<?= $item['image'] ?>" alt="<?= $item['title'] ?>" style="width: 100px; height 100px;"></td>
            <td style="display: flex; gap: 20px;">
                <form action="/change.php" method="post">
                    <input type="hidden" name="id" value="<?= $item['id']; ?>">
                    <button type="submit" class="btn btn-primary">Изменить</button>
                </form>
                <form action="/actions/items/items-delete.php" method="post">
                    <input type="hidden" name="id" value="<?= $item['id']; ?>">
                    <button type="submit" class="btn btn-danger">Удалить</button>
                </form>
            </td>

        </tr>

        <?php
        }
        ?>

    </tbody>

    </table>

</div>

<?php require_once __DIR__ . '/components/script.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>