<?php

  $idProduct = trim(strip_tags($_GET['id']));

  $sql = "select * from goods where id = $idProduct";
  $result = mysqli_query($connect,$sql);
  
  while($item = mysqli_fetch_assoc($result)) {
    break;
  }
