<?php
    include('../config/config.php');
    include ('./menu.php');
    include('../engine/getComment.php');
    include('../engine/renderProduct.php');
?>

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
    
    <?= renderMenu('../') ?>

    <div class="content content_product">
        
        <h1 class="title"><?= $item['name'] ?></h1>

        <a href="../public/<?= $item['photo'] ?>" target="_blank"><img src="../public/<?= $item['photo'] ?>" alt="bike" class="img"></a>
        <div class="text">
            
            <h3 class="header">Описание товара</h3>

            <?= $item['desc_short'] ?>
            
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
            
            <?= $item['desc_long'] ?>

        </div>

        <div class="text2 center">
            <h3 class="header">Отзывы покупателей</h3>
            
             <?php renderComment($require, '../public/') ?> 

        </div>

        <div class="text2 center">
            <h3 class="header">Оставьте своё впечатление о товаре</h3>
            
            <form action="../engine/from.php" method="POST" class="form_product">
                
                <input type="text" name="id" value="<?= $idProduct ?>" hidden>

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

    <footer>
	    &copy Все права защищены
    </footer>

</div>
</body>

</html>