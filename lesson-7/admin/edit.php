<?php
    include ('../engine/session.php');
    include('../config/config.php');
    include ('../templates/menu.php');
    include('../engine/renderProduct.php');

    if ($_SESSION['login'] === 'admin' && $_SESSION['password']) {?>

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

    <?= renderMenu('../') ?>
    

    <div class="content center">

        <h1 class="title center">Редактирование</h1>

        <form action="../admin/updateData.php" method="POST" class="form_product w80">
                    
            <input type="text" name="id" value="<?= $idProduct ?>" hidden>

            <label for="name" class="label_product">Имя</label>
            <input id="name" type="text" name="name" value="<?= $item['name'] ?>">

            <label for="price" class="label_product">Цена</label>
            <input id="price" type="text" name="price" value="<?= $item['price'] ?>">

            <label for="count" class="label_product">Количество</label>
            <input id="count" type="number" name="count" value="<?= $item['count'] ?>">

            <label for="desc_short" class="label_product">Описание товара</label>
            <textarea id="desc_short" name="desc_short"><?= $item['desc_short'] ?></textarea>

            <label for="specification" class="label_product">Характеристики</label>
            <textarea id="specification" name="specification"><?= $item['specification'] ?></textarea>

            <label for="desc_long" class="label_product">Подробное описание товара</label>
            <textarea id="desc_long" name="desc_long"><?= $item['desc_long'] ?></textarea>

            <input type="submit" class="form_btn" name="send" value="Отправить">

        </form>
    </div>

    <footer>
	    &copy Все права защищены
    </footer>

    <?php 
      } else { exit('Вы не Admin!'); }
    ?>
    
</div>
</body>

</html>