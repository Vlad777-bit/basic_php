<?php

include ('../config/config.php');

function newUser($connect, $name, $login, $password){

  $sql = "insert into users (name, login, password) values ('$name', '$login', '$password')";
  $result = mysqli_query($connect, $sql);

  if(!$result){
    die(mysqli_error($connect));
  }
}
