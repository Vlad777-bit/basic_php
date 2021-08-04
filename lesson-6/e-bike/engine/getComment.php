<?php

$idProduct = trim(strip_tags($_GET['id']));

$sql = "select * from comments where good_id = $idProduct order by id desc";
$require = mysqli_query($connect,$sql);
 
function renderComment($res, $path) {
  while($data = mysqli_fetch_assoc($res)) {?>
    <section class="comment">

      <div class="avatar">
        <img src="<?= $path . $data['photo'] ?>" alt="photo">
      </div>

      <div class="content_comment">
        <blockquote class="content_desc"><?= $data['text'] ?></blockquote> 
        <cite>Имя: <?= $data['name'] ?></cite>
        <div>e-mail: <?= $data['email'] ?></div>
        <div><?= $data['created_at'] ?></div>
      </div>

    </section>
   
   <?php
  }
}