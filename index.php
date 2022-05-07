<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/css/style.css">
    <!-- <script src="node_modules/jquery/dist/jquery.min.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>MeatOn | Главная</title>
</head>
<body>
    <?php require "page_modules/header.php"; ?>

    <main class="intro">
        <div class="carusel">
            <section class="carusel__item" id="carusel__item1">
                <h3 class="carusel__header">мы открылись</h3>
                <span class="carusel__text">гриль - напитки - доставка в любую точку города</span>
            </section>
            <section class="carusel__item" id="carusel__item2">
                <h3 class="carusel__header">праздник сов</h3>
                <span class="carusel__text">скидка 15% на заказы с 23:59 до 3:59</span>
            </section>
            <section class="carusel__item" id="carusel__item3">
                <h3 class="carusel__header">жаворонки, ликуем!</h3>
                <span class="carusel__text">скидка 20% на заказы с 4:00 до 8:00</span>
            </section>
            <section class="carusel__item" id="carusel__item4">
                <h3 class="carusel__header">первым приготовиться!</h3>
                <span class="carusel__text">получи 200 рублей на первый заказ</span>
            </section>
        </div>
        <div class="controls"></div>
    </main>
    
    <script src="src/js/carusel.js"></script>
</body>
</html>