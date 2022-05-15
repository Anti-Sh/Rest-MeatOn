<?php 
    session_start(); 
    if (!$_SESSION["user"]){
        header('Location: /pages/auth.php');
    }
    require_once "../core/connect.php"
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../src/css/style.css">
    <!-- <script src="node_modules/jquery/dist/jquery.min.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>MeatOn | Профиль</title>
</head>
<body>
    <?php require "../page_modules/header.php"; ?>
    <h3 class="main__header prof">Профиль</h3>
    <main class="profile__outer">
        <div class="profile__inner">
            <h3 class="profile__inner__header">Персональная информация</h3>
            <table class="pers__data orders">
                <tr class="pers__data__row">
                    <td class="pers__data__col1">E-mail</td>
                    <td class="pers__data__col2"><?=$_SESSION['user']['mail']?></td>
                </tr>
                <tr class="pers__data__row">
                    <td class="pers__data__col1">Номер телефона</td>
                    <td class="pers__data__col2"><?=$_SESSION['user']['phone']?></td>
                </tr>
                <tr class="pers__data__row">
                    <td class="pers__data__col1">Фамилия</td>
                    <td class="pers__data__col2"><?=$_SESSION['user']['surname']?></td>
                </tr>
                <tr class="pers__data__row">
                    <td class="pers__data__col1">Имя</td>
                    <td class="pers__data__col2"><?=$_SESSION['user']['name']?></td>
                </tr>
                <tr class="pers__data__row">
                    <td class="pers__data__col1">Адрес</td>
                    <td class="pers__data__col2"><?=$_SESSION['user']['address']?></td>
                </tr>
            </table>
            <a href="../core/logout.php" class="leaveBtn">Выйти</a>
        </div>
        <div class="profile__inner">
            <h3 class="profile__inner__header">Заказы</h3>
            <table class="pers__data orders">
                <tr>
                    <td class="orders__col1 pers__data__col1">Номер</td>
                    <td class="orders__col2 pers__data__col1">Дата</td>
                    <td class="orders__col3 pers__data__col1">Статус</td>
                </tr>
                <?php
                    $id = $_SESSION['user']['id'];
                    $count = 0;
                    $orders = mysqli_query($connect, "SELECT * FROM `orders` WHERE `customer`='$id'");
                    if (mysqli_num_rows($orders) == 0){
                ?>
                <tr>
                    <td class="orders__notif" colspan="3">Заказов нет</td>
                </tr>
                <?php 
                    }
                    else {
                        while( ($sql = mysqli_fetch_array($orders)) && $count <= 10){
                ?>
                <tr>
                    <td class="orders__col1 pers__data__col2"> <?= (int) $sql[0] ?> </td>
                    <td class="orders__col2 pers__data__col2"> <?=  date('Y-m-d  H:i', (int) $sql[2]) ?> </td>
                    <td class="orders__col3 pers__data__col2"> <?= $sql[3] == 1 ? "Выполнен" : "Готовится"?> </td>
                </tr>
                <?php
                            $count++;
                        }
                    };
                ?>
            </table>
            
        </div>
    </main>
    
    
    <script src="../src/js/script.js"></script>
</body>
</html>