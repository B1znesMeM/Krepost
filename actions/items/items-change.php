<?php
session_start();

if(!isset($_SESSION['user'])){
    echo 'Error handle action';
    die();
}

if(!$_SERVER['REQUEST_METHOD'] == 'post') {
    echo 'Error handle action';
    die();
}

require_once __DIR__ . '/../../app/requires/requires.php';


$path = __DIR__ . '/../../uploads';
if (!is_dir($path)) {
    mkdir($path);
}


$image = $_FILES['image'];

if($image['name'] !== ''){
    $filename = uniqid() . '-' . $image['name']; 
    move_uploaded_file($image['tmp_name'], "$path/$filename");
    $item_one = "uploads/$filename";
}

$image_two = $_FILES['image_two'];

if($image_two['name'] !== ''){
    $filename_two = uniqid() . '-' . $image_two['name']; 
    move_uploaded_file($image_two['tmp_name'], "$path/$filename_two");
    $item_two = "uploads/$filename_two";
}

$image_three = $_FILES['image_three']; 

if($image_three['name'] !== ''){
    $filename_three = uniqid() . '-' . $image_three['name'];
    move_uploaded_file($image_three['tmp_name'], "$path/$filename_three");
    $item_three = "uploads/$filename_three";
}

$image_four = $_FILES['image_four'];

if($image_four['name'] !== ''){
    $filename_four = uniqid() . '-' . $image_four['name']; 
    move_uploaded_file($image_four['tmp_name'], "$path/$filename_four");
    $item_four = "uploads/$filename_four";
}

$image_five = $_FILES['image_five'];

if($image_five['name'] !== ''){
    $filename_five = uniqid() . '-' . $image_five['name']; 
    move_uploaded_file($image_five['tmp_name'], "$path/$filename_five");
    $item_five = "uploads/$filename_five";
}

$image_six = $_FILES['image_six'];

if($image_six['name'] !== ''){
    $filename_six = uniqid() . '-' . $image_six['name'];  
    move_uploaded_file($image_six['tmp_name'], "$path/$filename_six");
    $item_six = "uploads/$filename_six";
}

$image_seven = $_FILES['image_seven'];

if($image_seven['name']){
    $filename_seven = uniqid() . '-' . $image_seven['name'];  
    move_uploaded_file($image_seven['tmp_name'], "$path/$filename_seven");
    $item_seven = "uploads/$filename_seven";
}

$image_eight = $_FILES['image_eight'];

if($image_eight['name'] !== ''){
    $filename_eight = uniqid() . '-' . $image_eight['name'];  
    move_uploaded_file($image_eight['tmp_name'], "$path/$filename_eight");
    $item_eight = "uploads/$filename_eight";
}

$image_nine = $_FILES['image_nine'];

if($image_nine['name'] !== ''){
    $filename_nine = uniqid() . '-' . $image_nine['name'];
    move_uploaded_file($image_nine['tmp_name'], "$path/$filename_nine");
    $item_nine = "uploads/$filename_nine";
}

$image_ten = $_FILES['image_ten'];

if($image_ten['name'] !== ''){
    $filename_ten = uniqid() . '-' . $image_ten['name']; 
    move_uploaded_file($image_ten['tmp_name'], "$path/$filename_ten");
    $item_ten = "uploads/$filename_ten";
}

$image_eleven = $_FILES['image_eleven'];

if($image_eleven['name'] !== ''){
    $filename_eleven = uniqid() . '-' . $image_eleven['name']; 
    move_uploaded_file($image_eleven['tmp_name'], "$path/$filename_eleven");
    $item_eleven = "uploads/$filename_eleven";
}

$image_twelve = $_FILES['image_twelve'];

if($image_twelve['name'] !== ''){
    $filename_twelve = uniqid() . '-' . $image_twelve['name']; 
    move_uploaded_file($image_twelve['tmp_name'], "$path/$filename_twelve");
    $item_twelve = "uploads/$filename_twelve";
}

$id = $_POST['id'];

try{
    $q = $db->prepare("UPDATE `items` SET 
        `title` = :title, 
        `description`= :description, 
        `price` = :price, 
        `image` = :image, 
        `image_two` = :image_two, 
        `image_three` = :image_three, 
        `image_four` = :image_four, 
        `image_five` = :image_five, 
        `image_six` = :image_six, 
        `image_seven` = :image_seven, 
        `image_eight` = :image_eight, 
        `image_nine` = :image_nine, 
        `image_ten` = :image_ten,
        `image_eleven` = :image_eleven,
        `image_twelve` = :image_twelve, 
        `type_action` = :type_action,
        `address` = :address, 
        `type` = :type, 
        `count_rooms` = :count_rooms, 
        `square_house` = :square_house, 
        `square_earth` = :square_earth, 
        `floor_house` = :floor_house, 
        `category_earth` = :category_earth, 
        `material_wall` = :material_wall, 
        `communications` = :communications, 
        `repaire` = :repaire, 
        `method_sale` = :method_sale, 
        `distance` = :distance, 
        `distance_from` = :distance_from, 
        `square_all` = :square_all, 
        `living_area` = :living_area, 
        `floor` = :floor, 
        `balcony` = :balcony, 
        `additionally` = :additionally, 
        `height_ceillings` = :height_ceillings, 
        `bathroom` = :bathroom, 
        `windows` = :windows, 
        `underfloor_heating` = :underfloor_heating, 
        `furniture` = :furniture, 
        `technic` = :technic, 
        `type_transaction` = :type_transaction, 
        `square` = :square 
        WHERE `id` = :id");
    $q->execute([
        'title' => $_POST['title'],
        'description' => $_POST['description'],
        'price' => $_POST['price'],
        'image' => isset($item_one) ? $item_one : '',
        'image_two' => isset($item_two) ? $item_two : '',
        'image_three' => isset($item_three) ? $item_three : '',
        'image_four' => isset($item_four) ? $item_four : '',
        'image_five' => isset($item_five) ? $item_fix : '',
        'image_six' => isset($item_six) ? $item_six : '',
        'image_seven' => isset($item_seven) ? $item_seven : '',
        'image_eight' => isset($item_eight) ? $item_eight : '',
        'image_nine' => isset($item_nine) ? $item_nine : '',
        'image_ten' => isset($item_ten) ? $item_ten : '',
        'image_eleven' => isset($item_eleven) ? $item_eleven : '',
        'image_twelve' => isset($item_twelve) ? $item_twelve : '',
        'type_action' => $_POST['type_action'],
        'address' => $_POST['address'],
        'type' => $_POST['type'],
        'count_rooms' => $_POST['count_rooms'] ?? null,
        'square_house' => $_POST['square_house'] ?? null,
        'square_earth' => $_POST['square_earth'] ?? null,
        'floor_house' => $_POST['floor_house'] ?? null,
        'category_earth' => $_POST['category_earth'] ?? null,
        'material_wall' => $_POST['material_wall'] ?? null,
        'communications' => $_POST['communications'] ?? null,
        'repaire' => $_POST['repaire'] ?? null,
        'method_sale' => $_POST['method_sale'] ?? null,
        'distance' => $_POST['distance'] ?? null,
        'distance_from' => $_POST['distance_from'] ?? null,
        'square_all' => $_POST['square_all'] ?? null,
        'living_area' => $_POST['living_area'] ?? null,
        'floor' => $_POST['floor'] ?? null,
        'balcony' => $_POST['balcony']?? null,
        'additionally' => $_POST['additionally'] ?? null,
        'height_ceillings' => $_POST['height_ceillings'] ?? null,
        'bathroom' => $_POST['bathroom'] ?? null,
        'windows' => $_POST['windows'] ?? null,
        'underfloor_heating' => $_POST['underfloor_heating'] ?? null,
        'furniture' => $_POST['furniture'] ?? null,
        'technic' => $_POST['technic'] ?? null,
        'type_transaction' => $_POST['type_transaction'] ?? null,
        'square' => $_POST['square'] ?? null,
        'id' => $id
    ]);
    header('Location: /admin.php');
}
catch(PDOException $e) {
    echo $e->getMessage();
}