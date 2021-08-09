<?php
  include('../config/config.php');
  include ('../templates/menu.php');
  include('../engine/editProduct.php');
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

  <?= renderMenu('../') ?>
    

    <div class="content"> 

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
    
</div>
</body>

</html>