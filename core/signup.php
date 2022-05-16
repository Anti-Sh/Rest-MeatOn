<?php
session_start(); 
require_once 'connect.php'; // "Импорт" содержимого файла со строкой подключения

$email = $_POST['email']; // Взятие значения из POST
$password = $_POST['password'];  // Взятие значения из POST
$password_confirm = $_POST['password_confirm'];  // Взятие значения из POST
$tel = $_POST['tel'];  // Взятие значения из POST
$firstName = $_POST['firstName'];  // Взятие значения из POST
$lastName = $_POST['lastName'];  // Взятие значения из POST
$address = $_POST['address'];  // Взятие значения из POST

$error_fields = [];  // Незаполненные поля

if ($email === '') $error_fields[] = 'mail'; // Проверка полей на пустоту
if ($password === '') $error_fields[] = 'password'; // Проверка полей на пустоту
if ($password_confirm === '') $error_fields[] = 'password_confirm'; // Проверка полей на пустоту
if ($tel === '') $error_fields[] = 'tel'; // Проверка полей на пустоту
if ($firstName === '') $error_fields[] = 'first_name'; // Проверка полей на пустоту
if ($lastName === '') $error_fields[] = 'last_name'; // Проверка полей на пустоту
if ($address === '') $error_fields[] = 'address'; // Проверка полей на пустоту

if (!empty($error_fields)) {
    $response = [ // Создание JSON
        "status" => false,
        "type" => 1,
        "message" => "Заполните выделенные поля и попробуйте снова",
        "fields" => $error_fields
    ];
    echo json_encode($response); // Отправка JSON на страницу
    die(); // Прекращение выполнения кода
}
if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
    $error_fields[] = 'mail';
    $response = [ // Создание JSON
        "status" => false,
        "type" => 1,
        "message" => "Укажите существующую почту!",
        "fields" => $error_fields
    ];
    echo json_encode($response); // Отправка JSON на страницу
    die(); // Прекращение выполнения кода
}
if ($password !== $password_confirm){
    $error_fields[] = 'password';
    $response = [ // Создание JSON
        "status" => false,
        "type" => 1,
        "message" => "Пароли не совпадают!",
        "fields" => $error_fields
    ];
    echo json_encode($response); // Отправка JSON на страницу
    die(); // Прекращение выполнения кода
}

$check_email = mysqli_query($connect, "SELECT * FROM `users` WHERE `mail` = '$email'");
$check_tel = mysqli_query($connect, "SELECT * FROM `users` WHERE `phone` = '$tel'");

if (mysqli_num_rows($check_email) > 0) $msg = "Пользователь с такой почтой уже зарегистрирован!";
if (mysqli_num_rows($check_tel) > 0) $msg = "Пользователь с таким номером телефона уже зарегистрирован!";
if (!empty($msg)){
    $response = [ // Создание JSON
        "status" => false,
        "message" => $msg
    ];
    echo json_encode($response); // Отправка JSON на страницу
    die(); // Прекращение выполнения кода
}

$insert_query = "INSERT INTO `users`(`mail`, `phone`, `password`, `name`, `surname`, `address`) VALUES ('$email','$tel','$password','$firstName','$lastName','$address')";
mysqli_query($connect, $insert_query);

$response = [ // Создание JSON
    "status" => true,
    "message" => "Аккаунт зарегистрирован"
];
echo json_encode($response); // Отправка JSON на страницу

?>