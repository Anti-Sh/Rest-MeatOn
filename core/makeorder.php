<?php
session_start(); 
require_once 'connect.php'; // "Импорт" содержимого файла со строкой подключения

$date_input = $_POST['date']; // Взятие значения из POST

if ($date === "") {
    $response = [ // Создание JSON
        "status" => false,
        "message" => "Введите дату и время"
    ];
    echo json_encode($response); // Отправка JSON на страницу
    die(); // Прекращение выполнения кода
}
$date_left = date('Y-m-d\TH:i', mktime(date("H")+6, date("i")-3, 0, date("m"), date("d"), date("Y")));
$date_right = date('Y-m-d\TH:i', mktime(date("H")+4, date("i"), 0, date("m"), date("d")+5, date("Y")));

$dt_input = preg_split('/[-.T.:]/', $date_input);

if ($date_left > $date_input || $date_right < $date_input){
    $response = [ // Создание JSON
        "status" => false,
        "message" => "Заказ можно сделать только заранее, но не менее, чем за 2 часа, и не более, чем за 5 суток."
    ];
    echo json_encode($response); // Отправка JSON на страницу
    die(); // Прекращение выполнения кода
}

$timestamp_input = mktime($dt_input[3], $dt_input[4], 0, $dt_input[1], $dt_input[2], $dt_input[0]);
$timestamp_now = time() + 4*60*60;

$user_id = $_SESSION["user"]["id"];
$query = "INSERT INTO `orders`(`id`, `customer`, `delivery_timestamp`, `order_timestamp`, `completion`) VALUES (NULL, '$user_id','$timestamp_input','$timestamp_now','0')"; 
mysqli_query($connect, $query) or $msg = mysqli_error($connect);
$order_id = mysqli_insert_id($connect);
foreach($_SESSION["cart"] as $dish){
    if ($dish["count"] > 0){
        $dish_id = $dish['id'];
        $count = $dish['count'];
        $query = "INSERT INTO `orders_food`(`id`, `order_id`, `dish_id`, `count`) VALUES (NULL, '$order_id','$dish_id','$count')"; 
        mysqli_query($connect, $query);
    }
}
$_SESSION["cart"] = [];
$response = [ // Создание JSON
    "status" => true
];
echo json_encode($response); // Отправка JSON на страницу