<?php

try {
    $config = require_once __DIR__ . '/../config.php';
    $db = new PDO("{$config['driver']}:host={$config['host']};dbname={$config['dbname']};", $config['user'], $config['password']);
}
catch (PDOException $e) {
    require_once __DIR__ . '/../components/db-error.php';
    die();
}