<?php
session_start(); 
require_once 'connect.php'; // "Импорт" содержимого файла со строкой подключения
//session_unset('dish');
$dish = $_POST['dish']; // Взятие значения из POST
$plus = $_POST['plus']; // Взятие значения из POST
$delete = $_POST['delete']; // Взятие значения из POST

if (empty($_SESSION['cart'])){
    $dishes = mysqli_query($connect, "SELECT * FROM `menu_dishes`");
    while($dish1 = mysqli_fetch_assoc($dishes)){
        $temp = [
            "id" => $dish1["id"],
            "name" => $dish1["name"],
            "count" => 0, 
            "price" => $dish1["cost"],
            "cost" => 0
        ];
        $_SESSION['cart'][$dish1["id"]] = $temp;
    };
}

$price = $_SESSION['cart'][(int)$dish]["price"];

if($delete == 1){
    $_SESSION['cart'][(int)$dish]["count"] = 0;
    $_SESSION['cart'][(int)$dish]["cost"] = 0;
}
else{
    if ($plus == "1"){
        $_SESSION['cart'][(int)$dish]["count"] += 1;
        $_SESSION['cart'][(int)$dish]["cost"] += $price;

    } else{
        $_SESSION['cart'][(int)$dish]["count"] -= 1;
        $_SESSION['cart'][(int)$dish]["cost"] -= $price;
    }
};

echo json_encode($_SESSION['cart']);

?>