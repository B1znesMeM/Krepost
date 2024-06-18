<?php
session_start();

require_once __DIR__ . '/../../app/requires/requires.php';

$name = $_POST['name'];
$pass = $_POST['password'];

try{
$q = $db->prepare("SELECT * FROM `users` WHERE `name` = :name");
$q->execute(['name' => $name]);
$user = $q->fetch(PDO::FETCH_ASSOC);
}
catch (PDOException $e) {
    echo 'Error login';
}

if(!$user) {
    $_SESSION['auth_error'] = true;
    header('Location: /login.php');
    die();
}

if($pass !== $user['password']) {
    $_SESSION['auth_error'] = true;
    header('Location: /login.php');
    die();
}

$_SESSION['user'] = $user['id'];

header('Location: /admin.php');