<?php

$sql = "select * from images";
$res = mysqli_query($connect,$sql);

function renderImg($res) {
  while($img = mysqli_fetch_assoc($res)) {?>

    <a href="<?= $img['path'] . $img['name']?>" 
      data-fancybox="gallery" 
      data-caption="<?= $img['name'] ?>" 
      target="blank" class="img_link"
    >
      <img src="<?= "{$img['path']}{$img['name']}" ?>" alt="photo" style="width: 300px; high: 200px" class="image">
    </a>
  <?php
  }
}

renderImg($res);

