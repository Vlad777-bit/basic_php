<?php

include("../config/config.php");
include("../engine/getComment.php");

$idProduct = trim(strip_tags($_POST['id']));

$name = trim(strip_tags($_POST['name']));
$email = trim(strip_tags($_POST['email']));
$text = trim(strip_tags($_POST['text']));

if ($name && $email && $text) {

  // $sql = "insert into comments (name, email, text) values ('$name', '$email', '$text')";
  $sql = "insert into comments (name, email, text, good_id) value ('$name', '$email', '$text', '$idProduct');";
  $result = mysqli_query($connect, $sql);

  if(!$result){
    die(mysqli_error($connect));
  }else{
    header("Location: ../templates/product.php?id=$idProduct");
  }
}