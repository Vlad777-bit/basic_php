<?php

  include ('./session.php');
  include ('../config/config.php');
  include ('./getData.php');
  

  if ($_POST['registration']) {

    $login = trim(strip_tags($_POST['login']));

    if (strtolower($login) === 'admin') {
      exit("Логин админа нельзя зарегистрировать!");
    }

    $users = getData($connect, 'users');

    foreach ($users as $user) {
      if ($login === $user['login']) {
        exit("Такой уже логин есть!");
      }
    }

    $pass = trim(strip_tags($_POST['password']));

    newUser($connect, $name, $login, md5($password));

    $message = "Вы зарегистрированы!";

  }

  if ($_POST['sign-in']) {
    $login = trim(strip_tags($_POST['login']));
    $password = trim(strip_tags($_POST['password']));
    $salt = "qwerasdzxc";
     
    $users = getData($connect, 'users');

    foreach ($users as $user) {

      $user['name'] ? $_SESSION['name'] = $user['name'] : 'Человек';
      $login === $user['login'] ? $_SESSION['login'] = $login : '';
      $salt . md5($password) . $salt === $user['password'] ? $_SESSION['password'] = $password : '';

      if ($_SESSION['login'] && $_SESSION['password']) {
        header("Location: ../templates/personalAccount.php");
      } else {
        header("Location: ../signInOrReg.php?success=false");
      }
    }
  } 

  if ($_POST['signOut']) {
    unset($_SESSION['name']);
    unset($_SESSION['login']);
    unset($_SESSION['password']);
    session_destroy();
    header('Location: ../index.php');
  }