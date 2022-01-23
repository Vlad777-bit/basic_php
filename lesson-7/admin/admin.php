<?php
  include ('../engine/session.php');
  include('../config/config.php');
  include ('../templates/menu.php');
  include('../engine/editProduct.php');

  if ($_SESSION['login'] === 'admin' && $_SESSION['password']) {?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Админка</title>
    <link href="https://fonts.googleapis.com/css2?family=Recursive:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../public/css/css.css">
</head>
<body>
<div class="container">

  <?= renderMenu('../') ?>    

    <div class="content"> 
        <h1 class="title">Добро пожаловать в Админку</h1>

      <div class="carts">
        <?= renderCards($result, '../public/', '223px') ?>

        <div class="cart"> 
            <form action="../engine/server.php" method="POST" class="cart__form">
                <button type="submit" class="cart__btn cart__add" name="add" value="add">
                    +
                </button>
            </form>
        </div>
      </div>   

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