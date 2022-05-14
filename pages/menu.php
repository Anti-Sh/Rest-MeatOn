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
    <?php 
        require "../page_modules/header.php"; 
        require_once "../core/connect.php";
    ?>
    <main class="pmenu">
        <h3 class="main__header">Мясные блюда</h3>
        <section class="pmenu__section">
            <?php 
                $query1 = "SELECT * FROM `menu_sections`";
                $results1 = mysqli_query($connect, $query1);
                while( $section = mysqli_fetch_array($results1)){
                    echo '<div class="pmenu__section__item">
                            <div class="pmenu__s__i__image">
                                <img src="'.$section[2].'">
                            </div>
                            <div class="pmenu__s__i__description">
                            <h3 class="description__header">'.$section[1].'</h3>';
                    
                    $query2 = "SELECT * FROM `menu_dishes` WHERE `menu_section`='$section[0]'";
                    $results2 = mysqli_query($connect, $query2);
                    echo '<table class="item__variants__table">
                            <tr>
                                <td class="variant__name tr__name">Вид</td>
                                <td class="variant__weight tr__name">Вес</td>
                                <td class="variant__cost tr__name">Цена</td>
                            </tr>';
                    while( $item = mysqli_fetch_array($results2)){
                        echo '<tr>
                                <td class="variant__name">'.$item[2].'</td>
                                <td class="variant__weight">'.$item[3].'</td>
                                <td class="variant__cost">'.$item[4].'</td>
                              </tr>';
                    };
                    echo '</table></div></div>';
                    if($section[0] == 3) echo '</section>
                        <h3 class="main__header">Другое</h3>
                        <section class="pmenu__section">';
                };
            ?>
        </section>
    </main>
    <script src="../src/js/script.js"></script>
</body>
</html>