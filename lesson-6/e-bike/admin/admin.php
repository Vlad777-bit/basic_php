<?php
  include('../config/config.php');
  include('../engine/editProduct.php');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Редактирование</title>
    <link href="https://fonts.googleapis.com/css2?family=Recursive:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../public/css/css.css">
</head>
<body>
<div class="container">

    <header>
       <a href="index.php"><img src="../public/img/e-bike.webp" alt="logo"></a> 
        <ul class="menu">
            <li><a class="menu_link" href="../index.php">Главная</a></li>
            <li><a class="menu_link" href="../catalog.php">Каталог</a></li>
            <li><a class="menu_link" href="../contacts.php">Контакты</a></li>
        </ul>
    </header>

    <div class="content">

      <div class="carts">
        <?= renderCards($result, '../public/', '223px') ?>
      </div>   

    </div>

    <footer>
	    &copy Все права защищены
    </footer>
    
</div>
</body>

</html>