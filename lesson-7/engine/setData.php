<?php

include ('../config/config.php');

function newUser($connect, $login, $password){

  $sql = "insert into users (login, password) values ('$login', '$password')";
  $result = mysqli_query($connect, $sql);

  if(!$result){
    header("Location: ../signInOrReg.php?login=false");
  }

  return true;
}
