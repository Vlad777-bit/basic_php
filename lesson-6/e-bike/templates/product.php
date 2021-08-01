<?php
    include('../config/config.php');

    $idProduct = $_GET['id'];

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
            
            <br>
            <a href="#">Купить</a>
        </div>
        <h3 class="header">Характеристики товара</h3>

        <?= $item['specification'] ?>

        <div class="text2">
            <h3 class="header">Подробное описание товара</h3>
            
            <?= $item['description_long'] ?>

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