<?php 

$sql = "select * from goods";
$result = mysqli_query($connect,$sql);
 
function renderCards($res, $path, $size) {
    while($item = mysqli_fetch_assoc($res)) {?>
    
    <div class="product"> 
        <a href="./templates/product.php?id=<?= $item['id'] ?>"> <img src="<?= $path . $item['photo'] ?>" style="width: <?= $size ?>"></a>
        <br>
        <a href="./templates/product.php?id=<?= $item['id'] ?>" class="name"><?= $item['name'] ?></a>
    </div>

  <?php
  }
}