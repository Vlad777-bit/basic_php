<?php

  include('../config/config.php');

  $name = trim(strip_tags($_POST['name']));
  $price = round(trim(strip_tags($_POST['price'])), 2);
  $count = (int)trim(strip_tags($_POST['count']));

  $desc_short = trim(($_POST['desc_short']));
  $specification = trim(($_POST['specification']));
  $desc_long = trim(($_POST['desc_long']));

  $sql = "insert";
  $result = mysqli_query($connect, $sql);

  if(!$result){
    die(mysqli_error($connect));
  }else{
    header("Location: ../admin/admin.php");
  }
