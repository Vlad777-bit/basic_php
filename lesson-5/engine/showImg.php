<?php

  include('./config.php');

  $id = $_GET['id'];
  $path = $_GET['path'];
  $name = $_GET['name'];
  $view = $_GET['view'];

  if ($_GET['viewed']) {
    $sql = "update images set view = view + 1 where id = $id";
    mysqli_query($connect,$sql);
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    img {
      width: 800px;
      text-align: center;
    }
  </style>
  <title>Document</title>
</head>
<body>
  <img src="../<?= $path . $name ?>" alt="full_photo"><br>
  <span>Кол-во просмотров <?= ++$view ?></span>
  
</body>
</html>
