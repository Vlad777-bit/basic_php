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

    <header>
        <img src="./public/img/e-bike.webp" alt="logo">
        <ul class="menu">
            <li><a class="menu_link" href="index.php">Главная</a></li>
            <li><a class="menu_link" href="catalog.php">Каталог</a></li>
            <li><a class="menu_link" href="contacts.php">Контакты</a></li>
        </ul>
    </header>

    <div class="content">
        <h1>Каталог</h1>

        <?php include('./templates/cards.php'); ?>
    </div>

    <footer>
	    &copy Все права защищены
    </footer>
    
</div>
</body>

</html>