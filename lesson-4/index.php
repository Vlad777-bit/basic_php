<?php
  include('./engine/uploadingImages.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css"/>
    <link rel="stylesheet" href="./style/style.css">
    <title>Document</title>
</head>
<body>
<div class="container">
    <header class="header">
        <h1 class="title">Photo gallery</h1>
    </header>
    <div class="gallery">
      <?php include_once('./engine/renderingImages.php'); ?>
    </div>


    <form action="" class="add_photo" method="POST" enctype="multipart/form-data">
        <span>Добавить файл: </span>
        <input type="file" name="userfile">
        <button type="submit" name="send">ЗАГРУЗИТЬ</button>
        <br>
        <span class="err"><?= $message ?></span>
    </form>


</div>

<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js"></script>
</body>
</html>
