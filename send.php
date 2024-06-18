<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

$response = ['status' => 'error', 'message' => '']; 

// Переменные, которые отправляет пользователь
$name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : null;
$email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : null;
$phone = isset($_POST['phone']) ? htmlspecialchars($_POST['phone']) : null;

// Проверка обязательных полей
if (empty($name) || empty($email) || empty($phone)) {
    $response['message'] = 'Все поля обязательны для заполнения!';
    echo json_encode($response);
    exit;
}
$mail = new PHPMailer(true);

try {
    // Переменные, которые отправляет пользователь
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);

    // Формирование самого письма
    $title = "Name клиенты!";
    $body = "
    <h2>Новое письмо на Name</h2>
    <b>ФИО:</b> $name<br>
    <b>Почта:</b> $email<br><br>
    <b>Телефон:</b> $phone<br><br>
    ";
    
    // Настройки PHPMailer
    $mail->isSMTP();
    $mail->CharSet = "UTF-8";
    $mail->SMTPAuth = true;
    
    // Настройки вашей почты
    $mail->Host = 'smtp.gmail.com';
    $mail->Username = 'yourmail@gmail.com'; 
    $mail->Password = 'password';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port = 465;
    $mail->setFrom('yourmail@gmail.com', 'name'); // Адрес самой почты и имя отправителя
    $mail->addAddress('yourmail@gmail.com');
    
    // Отправка сообщения
    $mail->isHTML(true);
    $mail->Subject = $title;
    $mail->Body = $body;

    if ($mail->send()) {
        $response = ['message' => 'Данные отправлены!'];
    } else {
        $response = ['message' => 'Ошибка отправки письма.'];
    }
} catch (Exception $e) {
    $response = ['message' => 'Ошибка: ' . $mail->ErrorInfo];
}

// Отправка результата
header('Content-Type: application/json');
echo json_encode($response);

?>
