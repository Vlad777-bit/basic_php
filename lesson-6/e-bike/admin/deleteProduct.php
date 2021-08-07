<?php

  include('../config/config.php');

  $idProduct = (int)trim(strip_tags($_GET['id']));
  
  $sql = "delete from goods where id = $idProduct";
  $result = mysqli_query($connect, $sql);

  if(!$result){
    die(mysqli_error($connect));
  }else{
    header("Location: ../admin/admin.php");
  }
