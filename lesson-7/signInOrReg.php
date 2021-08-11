<?php
    include ('./engine/session.php');
    include ('./templates/menu.php');
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

    <?= renderMenu() ?>

    <div class="content center">
        <h1 class="title center">Вход</h1>
        
        <div class="sign-in"> 

            <form action="./engine/validData.php" method="POST" class="form_product">

                <?php if ($_GET['success'] === 'false'):?>
                    <span class="error">Неверно введен логин/пароль</span>
                <?php endif; ?>

                <label for="login" class="label_product">Логин</label>
                <input id="login" type="text" name="login" placeholder="Ваш логин" value="<?= $_SESSION['login'] ? $_SESSION['login'] : '' ?>">

                <label for="password" class="label_product">Пароль</label>
                <input id="password" type="password" name="password" placeholder="Ваш пароль" value="<?= $_SESSION['password'] ? $_SESSION['password'] : '' ?>">

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