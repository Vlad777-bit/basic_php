<?php
include ('../config/config.php');
include ('../engine/session.php');
include ('../templates/menu.php');
include ('../engine/getData.php');

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Главная</title>
    <link href="https://fonts.googleapis.com/css2?family=Recursive:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../public/css/css.css">
</head>

<body>
    <div class="container">

        <?= renderMenu('../') ?>

        <div class="content">
            <h1 class="title">Корзина</h1>

            <table class="table center">
3
                <tr>
                    <td><img src="../public/img/bike1.jpg" class="img w100 disable-outline"></td>
                    <td>Electra Café Moto Go! (2020)</td>
                    <td><input type="number" name="count" class="input"></td>
                    <td><button class="btn">Купить</button></td>
                    <td><button class="btn">Удалить</button></td>
                </tr>
            </table>

            <form action="#" class="mt20">
                <button class="btn">Заказать</button>
                <button class="btn">Войти/Зарегистрироваться</button>
            </form>
        </div>

        <footer>
            &copy Все права защищены
        </footer>

    </div>
</body>

</html>