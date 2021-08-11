<?php
    include ('../engine/session.php');
    include ('./menu.php');
?>

<!DOCTYPE html>
<html>
<head> 
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Войти</title>
    <link href="https://fonts.googleapis.com/css2?family=Recursive:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../public/css/css.css">
</head>
<body>
<div class="container">

    <?= renderMenu('../') ?>

    <div class="content center">
        <h1 class="title center">Личный кабинет</h1>

        <span>Добро пожаловать <?= $_SESSION['name'] ?></span>

        <form action="../engine/validData.php" method="POST">
            <input type="submit" name="signOut" value="Выйти" class="form_btn">
        </form>
       
    </div>
    
    <footer>
	    &copy Все права защищены
    </footer>

</div>
</body>

</html>