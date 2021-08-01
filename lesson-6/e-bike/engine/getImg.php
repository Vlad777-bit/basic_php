<?php

$sql = "select * from images where id = 2";
$result = mysqli_query($connect,$sql);
 
function renderImg($res, $path, $size) {
  while($img = mysqli_fetch_assoc($res)) {?>

    <img src="<?= $path . $img['path'] ?>" style="width: <?= $size ?>">
   <?php
  }
}