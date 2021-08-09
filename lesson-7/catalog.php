<?php
    include('./config/config.php');
    include ('./templates/menu.php');
    include('./engine/getGoods.php');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Каталог</title>
    <link href="https://fonts.googleapis.com/css2?family=Recursive:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="public/css/css.css">
</head>
<body>
<div class="container">

    <?= renderMenu() ?>

    <div class="content">
        <h1 class="title">Каталог</h1>

        <div class="links">
            <?= renderCards($result, './public/', '223px') ?>
        </div>  
    </div>

    <footer>
	    &copy Все права защищены
    </footer>
    
</div>
</body>

</html>