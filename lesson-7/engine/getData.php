<?php

include ('../config/config.php');

function getData($connect, $table, $orderby='id'){
  $sql = "SELECT * FROM {$table} order by {$orderby} desc";
  $result = mysqli_query($connect, $sql);

  if(!$result) {
    die(mysqli_error($connect));
  }

  $rows = mysqli_num_rows($result);
  $item = [];

  for($i = 0; $i < $rows; $i++){
      $row = mysqli_fetch_assoc($result);
      $item[] = $row;
  }

  return $item;
}

function getUser($connect, $login, $table){
  $query = "SELECT * FROM {$table} where login = '$login'";
  $result = mysqli_query($connect, $query);

  if(!$result)
    die(mysqli_error($connect));

  $res = mysqli_fetch_assoc($result);

  return $res;
}