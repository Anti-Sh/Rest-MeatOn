<?php 
    session_start(); 
    if (!$_SESSION["user"]){
        header('Location: /pages/auth.php');
    };
    require_once "../core/connect.php";
    $num_in_cart = 0;
    $pr_in_cart = [];
    if ($_SESSION["cart"]){
        foreach($_SESSION["cart"] as $dish){
            if ($dish["count"] > 0){
                $num_in_cart++;
                $pr_in_cart[] = $dish;
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../src/css/style.css">
    <!-- <script src="node_modules/jquery/dist/jquery.min.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>MeatOn | Сделать заказ</title>
</head>
<body>
    <?php require "../page_modules/header.php"; ?>
    <h3 class="main__header prof">Добавить блюдо в заказ</h3>
    <main class="order">
        <select name="dishes" class="select__dish">
            <?
                $result = mysqli_query($connect, "SELECT `id`, `name` FROM `menu_dishes`");
                while ($dish = mysqli_fetch_array($result)):
            ?>    
            <option class="dish__variant" value="<?=$dish[0]?>"><?=$dish[1]?></option>
            <? endwhile; ?>
        </select>
        <button class="leaveBtn page__order__btn" id="add__dish" type="submit">Добавить</button>
    </main>
    <? if ($num_in_cart > 0): ?>
    <main class="order">
        <h3 class="main__header prof">Заказ</h3>
        <? foreach ($pr_in_cart as $item):?>
        <div class="order__inner">
            <button type="button" value="<?=$item["id"]?>" class="order__button delete__dish">&#8211;</button>
            <span class="order__text"><?=$item["name"]?></span>
            <div class="count">
                <button type="button" value="<?=$item["id"]?>" class="order__button count__btn count__minus">-</button>
                <span class="count__num"><?=$item["count"]?></span>
                <button type="button" value="<?=$item["id"]?>" class="order__button count__btn count__plus">+</button>
            </div>
            <span class="cost"><?=$item["cost"]?></span>
            <span class="price"><?=$item["price"]?></span>
        </div>
        <? endforeach; ?>
        <form action="" class="form__order">
            <div class="delieve__date">
                <input class="date" type="datetime-local" name="dateto"
                min="<?= date('Y-m-d\TH:i', mktime(date("H")+6, date("i"), 0, date("m"), date("d"), date("Y"))) ?>" 
                max="<?= date('Y-m-d\TH:i', mktime(date("H")+6, date("i"), 0, date("m"), date("d")+5, date("Y"))) ?>">
            </div>
            <div class="error__div">
                <h4 class="warning__header error__header">Ошибка!</h4>
                <span class="error__text warning__text"></span>
            </div>
            <h4 class="warning__header">Внимание!</h4>
            <span class="warning__text">
                Время доставки указается ориентировочно. После оформления заказа с вами свяжется менеджер для согласования деталей. <br> Оплата при получении!
            </span>
            <button class="leaveBtn page__order__btn" id="make__order" type="submit">Сделать заказ</button>
        </form>
    </main>
    <? endif; ?>
    <script src="../src/js/cartpage.js"></script>
</body>
</html>