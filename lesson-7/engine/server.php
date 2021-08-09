<?php 
  include ('./session.php');

  if ($_POST['edit']) {
    $id = $_POST['edit'];
    header("Location: ../admin/edit.php?id=$id");
  }

  if ($_POST['delete']) {
    $id = $_POST['delete'];
    header("Location: ../admin/deleteProduct.php?id=$id");
  }

  if ($_POST['add']) {
    header("Location: ../admin/addProduct.php");
  }

  if ($_POST['login'] && $_POST['password']) {
    $_SESSION['login'] = $_POST['login'];
    $_SESSION['password'] = $_POST['password'];
    header("Location: ./checkingLogin.php");
  }

  if ($_POST['registration']) {
    echo 'Зарегестрировался';
  }