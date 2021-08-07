<?php 

  include('../config/config.php');

  if ($_POST['edit']) {
    $id = $_POST['edit'];
    header("Location: edit.php?id=$id");
  }

  if ($_POST['delete']) {
    echo 'delete';
  }

echo '<pre>';
  print_r($_POST);
echo '</pre>';


