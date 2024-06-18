<?php
session_start();

if(!isset($_SESSION['user'])) {
    echo 'Error handle action';
    die();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php require_once __DIR__ . '/components/head.php'; ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<title>Изменить</title>
</head>
<body>

<nav class="nav-admin">

    <li><a href="admin.php">Вся недвижимость</a></li>

</nav>

<div class="container" style="margin-top: 40px;">
    <h1>Изменить</h1>

    <?php 
        $id = $_POST['id'];

        $q = $db->prepare("SELECT * FROM `items` WHERE `id` = :id");
        $q->execute(['id' => $id]);
        $item = $q->fetch(PDO::FETCH_ASSOC);
    ?>

    <form action="/actions/items/items-change.php" method="post" enctype="multipart/form-data">
    <h2>Основная информация</h2>
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Название</label>
            <input type="text" value="<?= $item['title'] ?>" name="title" class="form-control" id="formGroupExampleInput" placeholder="Напишите название..." required>
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Описание</label>
            <textarea type="text" name="description" class="form-control" id="formGroupExampleInput2" placeholder="Напишите описание..." required><?= $item['description'] ?></textarea>
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Цена</label>
            <input type="text" value="<?= $item['price'] ?>" name="price" class="form-control" id="formGroupExampleInput2" placeholder="Напишите цена..." required>
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Картинка</label>
            <input type="file" name="image" class="form-control" id="formGroupExampleInput2">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Вторая картинка</label>
            <input type="file" name="image_two" class="form-control" id="formGroupExampleInput2">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Третья картинка</label>
            <input type="file" name="image_three" class="form-control" id="formGroupExampleInput2">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Четвёртая картинка</label>
            <input type="file" name="image_four" class="form-control" id="formGroupExampleInput2">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Пятая картинка</label>
            <input type="file" name="image_five" class="form-control" id="formGroupExampleInput2">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Шестая картинка</label>
            <input type="file" name="image_six" class="form-control" id="formGroupExampleInput2">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Седьмая картинка</label>
            <input type="file" name="image_seven" class="form-control" id="formGroupExampleInput2">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Восьмая картинка</label>
            <input type="file" name="image_eight" class="form-control" id="formGroupExampleInput2">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Девятая картинка</label>
            <input type="file" name="image_nine" class="form-control" id="formGroupExampleInput2">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Десятая картинка</label>
            <input type="file" name="image_ten" class="form-control" id="formGroupExampleInput2">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Одиннадцатая картинка</label>
            <input type="file" name="image_eleven" class="form-control" id="formGroupExampleInput2">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Двенадцатая картинка</label>
            <input type="file" name="image_twelve" class="form-control" id="formGroupExampleInput2">
        </div>
        <select name="type_action" class="form-select" aria-label="Default select example" required>
        <?php 

        $tags = $db->query("SELECT * FROM `tags`")->fetchAll(PDO::FETCH_ASSOC);

        foreach($tags as $tag): ?>
            <option value="<?= $tag['id']; ?>" <?= $item['type_action'] == $tag['id'] ? 'selected' : ''; ?>><?= $tag['label']; ?></option>
        <?php endforeach; ?>

        </select>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Расположение</label>
            <input type="text" value="<?= $item['address'] ?>" name="address" class="form-control" id="formGroupExampleInput2" placeholder="Напишите расположение..." required>
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Тип</label>
            <input type="text" value="<?= $item['type'] ?>" name="type" class="form-control" id="formGroupExampleInput2" placeholder="Напишите тип...">
        </div>
        <h2>Дом информация</h2>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Количество комнат</label>
            <input type="text" value="<?= $item['count_rooms'] ?>" name="count_rooms" class="form-control" id="formGroupExampleInput2" placeholder="Напишите количество комнат...">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Площадь дома</label>
            <input type="text" value="<?= $item['square_house'] ?>" name="square_house" class="form-control" id="formGroupExampleInput2" placeholder="Напишите площадь дома...">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Площадь участка</label>
            <input type="text" value="<?= $item['square_earth'] ?>" name="square_earth" class="form-control" id="formGroupExampleInput2" placeholder="Напишите площадь участка...">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Этажей в доме</label>
            <input type="text" value="<?= $item['floor_house'] ?>" name="floor_house" class="form-control" id="formGroupExampleInput2" placeholder="Напишите этажей в доме...">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Категория земель</label>
            <input type="text" value="<?= $item['category_earth'] ?>" name="category_earth" class="form-control" id="formGroupExampleInput2" placeholder="Напишите категорию земель...">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Материал стен</label>
            <input type="text" value="<?= $item['material_wall'] ?>" name="material_wall" class="form-control" id="formGroupExampleInput2" placeholder="Напишите материал(ы) стен...">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Коммуникации</label>
            <input type="text" value="<?= $item['communications'] ?>" name="communications" class="form-control" id="formGroupExampleInput2" placeholder="Напишите коммуникации...">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Ремонт</label>
            <input type="text" value="<?= $item['repaire'] ?>" name="repaire" class="form-control" id="formGroupExampleInput2" placeholder="Напишите ремонт...">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Способ продажи</label>
            <input type="text" value="<?= $item['method_sale'] ?>" name="method_sale" class="form-control" id="formGroupExampleInput2" placeholder="Напишите способ продажи...">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Расстояние до центра</label>
            <input type="text" value="<?= $item['distance'] ?>" name="distance" class="form-control" id="formGroupExampleInput2" placeholder="Напишите расстояние до центра...">
        </div>
        <h2>Квартира информация</h2>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Количество комнат</label>
            <input type="text" value="<?= $item['count_rooms'] ?>" name="count_rooms" class="form-control" id="formGroupExampleInput2" placeholder="Напишите количество комнат...">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Общая площадь</label>
            <input type="text" value="<?= $item['square_all'] ?>" name="square_all" class="form-control" id="formGroupExampleInput2" placeholder="Напишите общая площадь...">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Жилая площадь</label>
            <input type="text" value="<?= $item['living_area'] ?>" name="living_area" class="form-control" id="formGroupExampleInput2" placeholder="Напишите жилая площадь...">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Этаж</label>
            <input type="text" value="<?= $item['floor'] ?>" name="floor" class="form-control" id="formGroupExampleInput2" placeholder="Напишите этаж...">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Балкон или лоджия</label>
            <input type="text" value="<?= $item['balcony'] ?>" name="balcony" class="form-control" id="formGroupExampleInput2" placeholder="Напишите балкон или лоджия...">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Дополнительно</label>
            <input type="text" value="<?= $item['additionally'] ?>" name="additionally" class="form-control" id="formGroupExampleInput2" placeholder="Напишите дополнительно...">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Высота потолков</label>
            <input type="text" value="<?= $item['height_ceillings'] ?>" name="height_ceillings" class="form-control" id="formGroupExampleInput2" placeholder="Напишите потолков...">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Санузел</label>
            <input type="text" value="<?= $item['bathroom'] ?>" name="bathroom" class="form-control" id="formGroupExampleInput2" placeholder="Напишите санузел...">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Окна</label>
            <input type="text" value="<?= $item['windows'] ?>" name="windows" class="form-control" id="formGroupExampleInput2" placeholder="Напишите окна...">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Ремонт</label>
            <input type="text" value="<?= $item['repaire'] ?>" name="repaire" class="form-control" id="formGroupExampleInput2" placeholder="Напишите ремонт...">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Тёплый пол</label>
            <input type="text" value="<?= $item['underfloor_heating'] ?>" name="underfloor_heating" class="form-control" id="formGroupExampleInput2" placeholder="Напишите тёплый пол...">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Мебель</label>
            <input type="text" value="<?= $item['furniture'] ?>" name="furniture" class="form-control" id="formGroupExampleInput2" placeholder="Напишите мебель...">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Техника</label>
            <input type="text" value="<?= $item['technic'] ?>" name="technic" class="form-control" id="formGroupExampleInput2" placeholder="Напишите техника...">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Способ продажи</label>
            <input type="text" value="<?= $item['method_sale'] ?>" name="method_sale" class="form-control" id="formGroupExampleInput2" placeholder="Напишите способ продажи...">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Вид сделки</label>
            <input type="text" value="<?= $item['type_transaction'] ?>" name="type_transaction" class="form-control" id="formGroupExampleInput2" placeholder="Напишите вид сделки...">
        </div>
        <h2>Земля информация</h2>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Площадь</label>
            <input type="text" value="<?= $item['square'] ?>" name="square" class="form-control" id="formGroupExampleInput2" placeholder="Напишите площадь...">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Расстояние от центра города</label>
            <input type="text" value="<?= $item['distance_from'] ?>" name="distance_from" class="form-control" id="formGroupExampleInput2" placeholder="Напишите расстояние от центра города...">
        </div>

        <input type="hidden" name="id" value="<?= $id ?>">

        <button type="submit" class="btn btn-success" style="margin-bottom: 30px;">Изменить</button>

    </form>

</div>
    
<?php require_once __DIR__ . '/components/script.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>