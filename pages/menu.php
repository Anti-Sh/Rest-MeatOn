<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../src/css/style.css">
    <!-- <script src="node_modules/jquery/dist/jquery.min.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>MeatOn | Меню</title>
</head>
<body>
    <?php require "../page_modules/header.php"; ?>
    
    <main class="pmenu">
        <h3 class="main__header">Мясные блюда</h3>
        <section class="pmenu__section">
            <div class="pmenu__section__item">
                <div class="pmenu__s__i__image">
                    <img src="../../src/img/Chickenmenu.png">
                </div>
                <div class="pmenu__s__i__description">
                    <h3 class="description__header">
                        Курица
                    </h3>
                    <table class="item__variants__table">
                        <tr>
                            <td class="variant__name tr__name">Вид</td>
                            <td class="variant__weight tr__name">Вес</td>
                            <td class="variant__cost tr__name">Цена</td>
                        </tr>
                        <tr>
                            <td class="variant__name">Курица с салатом</td>
                            <td class="variant__weight">350</td>
                            <td class="variant__cost">399</td>
                        </tr>
                        <tr>
                            <td class="variant__name">Золотой цыпленок</td>
                            <td class="variant__weight">270</td>
                            <td class="variant__cost">899</td>
                        </tr>
                        <tr>
                            <td class="variant__name">Курица под белым соусом</td>
                            <td class="variant__weight">240</td>
                            <td class="variant__cost">599</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="pmenu__section__item">
                <div class="pmenu__s__i__image">
                    <img src="../../src/img/Beefmenu.png">
                </div>
                <div class="pmenu__s__i__description">
                    <h3 class="description__header">
                        Говядина
                    </h3>
                    <table class="item__variants__table">
                        <tr>
                            <td class="variant__name tr__name">Вид</td>
                            <td class="variant__weight tr__name">Вес</td>
                            <td class="variant__cost tr__name">Цена</td>
                        </tr>
                        <tr>
                            <td class="variant__name">Стейк из Говядины</td>
                            <td class="variant__weight">490</td>
                            <td class="variant__cost">799</td>
                        </tr>
                        <tr>
                            <td class="variant__name">Стейк из Мраморной Говядины</td>
                            <td class="variant__weight">700</td>
                            <td class="variant__cost">1499</td>
                        </tr>
                        <tr>
                            <td class="variant__name">Антрекот</td>
                            <td class="variant__weight">520</td>
                            <td class="variant__cost">1299</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="pmenu__section__item">
                <div class="pmenu__s__i__image">
                    <img src="../..//src/img/Porkmenu.png">
                </div>
                <div class="pmenu__s__i__description">
                    <h3 class="description__header">
                        Свинина
                    </h3>
                    <table class="item__variants__table">
                        <tr>
                            <td class="variant__name tr__name">Вид</td>
                            <td class="variant__weight tr__name">Вес</td>
                            <td class="variant__cost tr__name">Цена</td>
                        </tr>
                        <tr>
                            <td class="variant__name">Щёчки</td>
                            <td class="variant__weight">350</td>
                            <td class="variant__cost">699</td>
                        </tr>
                        <tr>
                            <td class="variant__name">Рёбрышки</td>
                            <td class="variant__weight">400</td>
                            <td class="variant__cost">979</td>
                        </tr>
                        <tr>
                            <td class="variant__name">Отбивная</td>
                            <td class="variant__weight">280</td>
                            <td class="variant__cost">749</td>
                        </tr>
                    </table>
                </div>
            </div>
        </section>
        <h3 class="main__header">Другое</h3>
        <section class="pmenu__section">
            <div class="pmenu__section__item">
                <div class="pmenu__s__i__image">
                    <img src="../../src/img/Snacksmenu.png">
                </div>
                <div class="pmenu__s__i__description">
                    <h3 class="description__header">
                        Закуски
                    </h3>
                    <table class="item__variants__table">
                        <tr>
                            <td class="variant__name tr__name">Вид</td>
                            <td class="variant__weight tr__name">Вес</td>
                            <td class="variant__cost tr__name">Цена</td>
                        </tr>
                        <tr>
                            <td class="variant__name">Чипсы "домашние"</td>
                            <td class="variant__weight">120</td>
                            <td class="variant__cost">209</td>
                        </tr>
                        <tr>
                            <td class="variant__name">Капуста брокколи жаренная</td>
                            <td class="variant__weight">80</td>
                            <td class="variant__cost">179</td>
                        </tr>
                        <tr>
                            <td class="variant__name">Грибы маринованные</td>
                            <td class="variant__weight">140</td>
                            <td class="variant__cost">349</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="pmenu__section__item">
                <div class="pmenu__s__i__image">
                    <img src="../../src/img/Drinksmenu.png">
                </div>
                <div class="pmenu__s__i__description">
                    <h3 class="description__header">
                        Напитки
                    </h3>
                    <table class="item__variants__table">
                        <tr>
                            <td class="variant__name tr__name">Вид</td>
                            <td class="variant__V tr__name">Объем</td>
                            <td class="variant__cost tr__name">Цена</td>
                        </tr>
                        <tr>
                            <td class="variant__name">Морс</td>
                            <td class="variant__V ">500</td>
                            <td class="variant__cost">99</td>
                        </tr>
                        <tr>
                            <td class="variant__name">Лимонад "домашний"</td>
                            <td class="variant__V">750</td>
                            <td class="variant__cost">459</td>
                        </tr>
                        <tr>
                            <td class="variant__name">Вино</td>
                            <td class="variant__V">750</td>
                            <td class="variant__cost">2799</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="pmenu__section__item">
                <div class="pmenu__s__i__image">
                    <img src="../../src/img/Desertsmenu.png">
                </div>
                <div class="pmenu__s__i__description">
                    <h3 class="description__header">
                        Десерты
                    </h3>
                    <table class="item__variants__table">
                        <tr>
                            <td class="variant__name tr__name">Вид</td>
                            <td class="variant__weight tr__name">Вес</td>
                            <td class="variant__cost tr__name">Цена</td>
                        </tr>
                        <tr>
                            <td class="variant__name">Чизкейк</td>
                            <td class="variant__weight">140</td>
                            <td class="variant__cost">239</td>
                        </tr>
                        <tr>
                            <td class="variant__name">Тирамису</td>
                            <td class="variant__weight">190</td>
                            <td class="variant__cost">219</td>
                        </tr>
                        <tr>
                            <td class="variant__name">Шоколадный мусс</td>
                            <td class="variant__weight">130</td>
                            <td class="variant__cost">269</td>
                        </tr>
                    </table>
                </div>
            </div>
        </section>
    </main>
    
    
    <script src="src/js/script.js"></script>
</body>
</html>