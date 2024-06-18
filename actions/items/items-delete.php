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

$id = $_POST['id'];

try{
$q = $db->prepare("DELETE FROM `items` WHERE `id` = :id");
$q->execute([
    'id' => $id
]);
header('Location: /admin.php');
}
catch(PDOException $e) {
    echo 'Error delete';
}