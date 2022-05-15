<?php
session_start(); 
require_once 'connect.php'; // "Импорт" содержимого файла со строкой подключения
// session_unset('dish');
$dish = $_POST['dish']; // Взятие значения из POST
if (empty($_SESSION['cart'])){
    $dishes = mysqli_query($connect, "SELECT * FROM `menu_dishes`");
    while($dish1 = mysqli_fetch_assoc($dishes)){
        $temp = [
            "name" => $dish1["name"],
            "count" => 0, 
            "price" => $dish1["cost"],
            "cost" => 0
        ];
        $_SESSION['cart'][$dish1["id"]] = $temp;
    };
}
$_SESSION['cart'][(int)$dish]["count"] += 1;
echo json_encode($_SESSION['cart']);

?>