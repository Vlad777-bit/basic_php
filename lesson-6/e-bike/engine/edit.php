<?php
  include('../config/config.php');
  include('../engine/renderProduct.php');
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

    <div class="content center">

      <form action="" method="POST" class="form_product">
                
        <input type="text" name="id" value="<?= $idProduct ?>" hidden>

        <label for="name" class="label_product">Имя</label>
        <input id="name" type="text" name="name" value="<?= $item['name'] ?>">

        <label for="desc_short" class="label_product">Описание товара</label>
        <textarea id="desc_short" name="desc_short"><?= $item['desc_short'] ?></textarea>

        <label for="desc_long" class="label_product">Подробное описание товара</label>
        <textarea id="desc_long" name="desc_long"><?= $item['desc_long'] ?></textarea>

        

        <input type="submit" class="form_btn" name="send" value="Отправить">

      </form>
    </div>

    <footer>
	    &copy Все права защищены
    </footer>
    
</div>
</body>

</html>