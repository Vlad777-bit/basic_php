<?php
    include('../config/config.php');
    include('../engine/getComment.php');
    // include('../engine/from.php');

    $idProduct = (int)$_GET['id'];

    $sql = "select * from goods where id = $idProduct";
    $result = mysqli_query($connect,$sql);
    
    while($item = mysqli_fetch_assoc($result)): ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title><?= $item['name'] ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Recursive:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../public/css/css.css">
</head>
<body> 
<div class="container">
    
    <header>
       <a href="../index.php"><img src="../public/img/e-bike.webp" alt="logo"></a> 
        <ul class="menu">
            <li><a class="menu_link" href="../index.php">Главная</a></li>
            <li><a class="menu_link" href="../catalog.php">Каталог</a></li>
            <li><a class="menu_link" href="../contacts.php">Контакты</a></li>
        </ul>
    </header>

    <div class="content content_product">
        <h1><?= $item['name'] ?></h1>
        <a href="../public/<?= $item['path'] ?>" target="_blank"><img src="../public/<?= $item['path'] ?>" alt="bike" class="img"></a>
        <div class="text">
            
            <h3 class="header">Описание товара</h3>

            <?= $item['description_short'] ?>
            
            <div class="buy_product">
                <div class="price">Цена: <b><?= $item['price'] ?>$</b></div>
                <div class="count">Осталось: <b><?= $item['count'] ?> шт.</b></div>
                <button class="buy_btn">Купить</button>
            </div>
        </div>
        <h3 class="header">Характеристики товара</h3>

        <?= $item['specification'] ?>

        <div class="text2">
            <h3 class="header">Подробное описание товара</h3>
            
            <?= $item['description_long'] ?>

        </div>

        <div class="text2 center">
            <h3 class="header">Отзывы покупателей</h3>
            
            <?php renderComment($require, '../public/') ?>

        </div>

        <div class="text2 center">
            <h3 class="header">Оставьте своё впечатление о товаре</h3>
            
            <form action="../engine/from.php" method="POST" class="form_product">
    
                <label for="name" class="label_product">Имя</label>
                <input id="name" type="text" name="name" placeholder="Ваше имя">

                <label for="email" class="label_product">E-mail</label>
                <input id="email" type="email" name="email" placeholder="Ваш e-mail">

                <label for="text"></label>
                <textarea id="text" placeholder="Какие ваши впечатления?" name="text"></textarea>

                <input type="submit" class="form_btn" name="send" value="Отправить">

            </form>
        
        </div>

    </div>

    <?php
        endwhile
    ?>

    <footer>
	    &copy Все права защищены
    </footer>

</div>
</body>

</html>