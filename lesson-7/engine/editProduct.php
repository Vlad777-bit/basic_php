<?php

$sql = "select * from goods";
$result = mysqli_query($connect,$sql);
 
function renderCards($res, $path, $size) {
    while($item = mysqli_fetch_assoc($res)) {?>
    
    <div class="cart"> 

        <div class="cart__img">
          <img src="<?= $path . $item['photo'] ?>" style="width: <?= $size ?>">
        </div>

        <div class="cart__name">
          <p><?= $item['name'] ?></p>
        </div>

        <form action="../engine/server.php" method="POST" class="cart__form">
          <button type="submit" class="cart__btn" name="edit" value="<?= $item['id'] ?>">
            Редактировать
          </button>

          <button type="submit" class="cart__btn" name="delete" value="<?= $item['id'] ?>">
            Удалить
          </button> 
        </form>

    </div>

  <?php
  }
}