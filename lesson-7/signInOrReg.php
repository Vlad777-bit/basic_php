<?php

?>

<!DOCTYPE html>
<html>
<head> 
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Войти</title>
    <link href="https://fonts.googleapis.com/css2?family=Recursive:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="public/css/css.css">
</head>
<body>
<div class="container">

    <header>
       <a href="index.php"><img src="./public/img/e-bike.webp" alt="logo"></a> 
        <ul class="menu">
            <li><a class="menu_link" href="index.php">Главная</a></li>
            <li><a class="menu_link" href="catalog.php">Каталог</a></li>
            <li><a class="menu_link"href="signInOrReg.php">Войти</a></li>
        </ul>
    </header>

    <div class="content center">
        <h1 class="title center">Вход</h1>
        
        <div class="sign-in">
            <form action="./engine/server.php" method="POST" class="form_product">
                    
                <input type="text" name="id" value="<?= $idProduct ?>" hidden>

                <label for="login" class="label_product">Логин</label>
                <input id="login" type="text" name="login" placeholder="Ваш логин" value="<?= $_SESSION['login'] ?>">

                <label for="password" class="label_product">Пароль</label>
                <input id="password" type="password" name="password" placeholder="Ваш пароль" value="">

                <div class="sign-in__btn">
                    <input type="submit" class="form_btn" name="sign-in" value="Вход">
                    <input type="submit" class="form_btn" name="registration" value="Регистрация">
                </div>

            </form>
        </div>
    </div>
    
    <footer>
	    &copy Все права защищены
    </footer>

</div>
</body>

</html>