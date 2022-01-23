<?php
    include ('./engine/session.php');
    include ('./templates/menu.php');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Главная</title>
    <link href="https://fonts.googleapis.com/css2?family=Recursive:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="public/css/css.css">
</head>
<body>
<div class="container">

    <?= renderMenu() ?>

    <div class="content">
        <h1 class="title">E-bike</h1>
        <p>
            <b>Дорогие друзья!</b> Я&nbsp;рад, что&nbsp;Вы смогли посетить наш интернет-магазин <i>E-bike</i>
            Надеюсь Вы&nbsp;найдёте
            электровелосипед, подходящий именно Вам!
        </p>
    </div>

    <footer>
	    &copy Все права защищены
    </footer>
    
</div>
</body>

</html>