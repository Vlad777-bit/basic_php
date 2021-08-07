<?php

  include('../config/config.php');

  $idProduct = trim(strip_tags($_POST['id']));

  $name = trim(strip_tags($_POST['name']));
  $price = round(trim(strip_tags($_POST['price'])), 2);
  $count = (int)trim(strip_tags($_POST['count']));

  $desc_short = trim(($_POST['desc_short']));
  $specification = trim(($_POST['specification']));
  $desc_long = trim(($_POST['desc_long']));

  $sql = "
    update goods
    set 
      name = '$name', 
      price = $price, 
      count = $count, 
      desc_short = '$desc_short', 
      desc_long = '$desc_long', 
      specification = '$specification' 
    where id = $idProduct
  ";
  $result = mysqli_query($connect, $sql);

  if(!$result){
    die(mysqli_error($connect));
  }else{
    header("Location: ../admin/admin.php");
  }
