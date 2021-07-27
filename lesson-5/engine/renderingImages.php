<?php

$sql = "select * from images order by view desc";
$res = mysqli_query($connect,$sql);

function renderImg($res) {
  while($img = mysqli_fetch_assoc($res)) {?>

    <a href="./engine/showImg.php?
        id=<?= $img['id'] ?>&
        path=<?= $img['path'] ?>&
        name=<?= $img['name'] ?>&
        view=<?= $img['view'] ?>&
        viewed=true" 
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

