<?php

include("../config/config.php");
include("../engine/getComment.php");

print_r($_POST);

$name = trim(strip_tags($_POST['name']));
$photo = 'img/avatar.png';
$email = trim(strip_tags($_POST['email']));
$text = trim(strip_tags($_POST['text']));

if ($name && $email && $text) {
  $t = "INSERT INTO comment (fio, email, text) VALUES ('%s','%s','%s')";

  $query = sprintf($t, mysqli_real_escape_string($connect, $name),mysqli_real_escape_string($connect, $email),mysqli_real_escape_string($connect, $text));
  $result = mysqli_query($connect, $query);

  if(!$result){
    die(mysqli_error($connect));
  }else{
    header("Location: ../templates/product.php");
  }
}