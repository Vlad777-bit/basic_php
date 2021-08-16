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

                <div>
                    <label for="login" class="label_product">Логин</label>

                    <br>

                    <?php if ($_GET['login'] === 'false'):?>
                        <span class="error">Неверно введен логин</span>
                    <?php endif; ?>

                    <input id="login" type="text" name="login" placeholder="Ваш логин" value="<?= $_SESSION['login'] ? $_SESSION['login'] : '' ?>">

                    <label for="password" class="label_product">Пароль</label>

                    <br>

                    <?php if ($_GET['password'] === 'false'):?>
                        <span class="error">Неверно введен пароль</span>
                    <?php endif; ?>

                    <input id="password" type="password" name="password" placeholder="Ваш пароль" value="<?= $_SESSION['password'] ? $_SESSION['password'] : '' ?>">
                </div>

                <div class="sign-in__btn">
                    <input type="submit" class="form_btn" name="sign-in" value="Вход">
                </div>
            </form>

            <form action="./engine/validData.php" method="POST" class="form_product">

                <div>
                    <label for="new_login" class="label_product">Логин</label>

                    <br>

                    <?php if ($_GET['new_login'] === 'false' || $_GET['new_login'] === 'admin'):?>
                        <span class="error">Такой логин уже есть</span>
                    <?php endif; ?>

                    <input id="new_login" type="text" name="new_login" placeholder="Придумайте логин">

                    <label for="new_password" class="label_product">Пароль</label>
                    <input id="new_password" type="password" name="new_password" placeholder="Придумайте пароль">

                    <label for="repeat_password" class="label_product">Повторите пароль ещё раз</label>

                    <?php if ($_GET['pass'] === 'false'):?>
                        <span class="error">Пароли не совпадают</span>
                    <?php endif; ?>

                    <input id="repeat_password" type="password" name="repeat_password" placeholder="Повторите пароль">
                </div>

                <div class="sign-in__btn">
                    <input type="submit" class="form_btn" name="registration" value="Зарегистрироваться">
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