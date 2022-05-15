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
    <h3 class="main__header prof">Заказ</h3>
    <main class="order">
        <div class="order__inner">
            <button type="button" value="0" class="order__button delete__dish">&#8211;</button>
            <span class="order__text">Капуста брокколи жаренная</span>
            <div class="count">
                <button type="button" value="0" class="order__button count__btn count__minus">-</button>
                <span class="count__num">1</span>
                <button type="button" value="0" class="order__button count__btn count__plus">+</button>
            </div>
            <span class="cost">480</span>
            <span class="price">480</span>
        </div>
        <div class="order__inner">
            <button type="button" value="1" class="order__button delete__dish">&#8211;</button>
            <span class="order__text">Курица под белым соусом</span>
            <div class="count">
                <button value="1" type="button" class="order__button count__btn count__minus">-</button>
                <span class="count__num">1</span>
                <button value="1" type="button" class="order__button count__btn count__plus">+</button>
            </div>
            <span class="cost">560</span>
            <span class="price">560</span>
        </div>
        </div>
        <div class="order__inner">
            <button type="button" value="2" class="order__button delete__dish">&#8211;</button>
            <span class="order__text">Стейк из Мраморной Говядины</span>
            <div class="count">
                <button value="2" type="button" class="order__button count__btn count__minus">-</button>
                <span class="count__num">1</span>
                <button value="2" type="button" class="order__button count__btn count__plus">+</button>
            </div>
            <span class="cost">1056</span>
            <span class="price">1056</span>
        </div>
        <button class="leaveBtn page__order__btn" type="submit">Сделать заказ</button>
    </main>
    
    <script src="../src/js/cartpage.js"></script>
</body>
</html>