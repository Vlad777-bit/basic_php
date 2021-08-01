<?php

$sql = "select * from goods";
$result = mysqli_query($connect,$sql);
 
function renderCards($res, $path, $size) {
    while($item = mysqli_fetch_assoc($res)) {?>
    
    <div class="product">
        <a href=""> <img src="<?= $path . $item['path'] ?>" style="width: <?= $size ?>"></a>
        <br>
        <a href="" class="name"><?= $item['name'] ?></a>
    </div>

  <?php
  }
}