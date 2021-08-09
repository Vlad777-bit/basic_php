<?php 

  include('../config/config.php');

  if ($_POST['edit']) {
    $id = $_POST['edit'];
    header("Location: ../admin/edit.php?id=$id");
  }

  if ($_POST['delete']) {
    $id = $_POST['delete'];
    header("Location: ../admin/deleteProduct.php?id=$id");
  }

  if ($_POST['add']) {
    header("Location: ../admin/addProduct.php?id=$id");
  }

echo '<pre>';
  print_r($_POST);
echo '</pre>';


