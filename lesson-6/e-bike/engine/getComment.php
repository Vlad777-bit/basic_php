<?php

$sql = "select * from comment order by id desc";
$require = mysqli_query($connect,$sql);
 
function renderComment($res, $path) {
  while($data = mysqli_fetch_assoc($res)) {?>
    <section class="comment">

      <div class="avatar">
        <img src="<?= $path . $data['photo'] ?>" alt="photo">
      </div>

      <div class="content_comment">
        <blockquote class="content_desc"><?= $data['text'] ?></blockquote>
        <cite><?= $data['fio'] ?></cite>
        <div><?= $data['email'] ?></div>
        <div><?= $data['created_at'] ?></div>
      </div>

    </section>
   
   <?php
  }
}