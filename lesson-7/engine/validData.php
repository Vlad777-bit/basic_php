<?php

  include ('./session.php');
  include ('../config/config.php');

  include ('./setData.php');
  include ('./getData.php');

  $salt = "qwerasdzxc";

  if ($_POST['registration']) {

    $login = trim(strip_tags($_POST['new_login']));
 
    if (strtolower($login) === 'admin') {
      header("Location: ../signInOrReg.php?new_login=admin");
      exit('error login');
    }

    $user = getUser($connect, $login, 'users');

    if ($login === $user['login']) {
      header("Location: ../signInOrReg.php?new_login=false");
      exit('error login');
    }

    $password = trim(strip_tags($_POST['new_password']));
    $repeat_password = trim(strip_tags($_POST['repeat_password']));

    if ($password !== $repeat_password) {
      header("Location: ../signInOrReg.php?pass=false");
      exit('error password');
    } 

    if (newUser($connect, $login, $salt . md5($password) . $salt)) {
      $_SESSION['login'] = $login;
      $_SESSION['password'] = $password;
    }

    if ($_SESSION['login'] && $_SESSION['password']) {
      header("Location: ../templates/personalAccount.php");
    }
  }

  if ($_POST['sign-in']) {

    $login = trim(strip_tags($_POST['login']));
    $password = trim(strip_tags($_POST['password']));

    $user = getUser($connect, $login, 'users');
      
    $login === $user['login'] ? $_SESSION['login'] = $login : '';
    $salt . md5($password) . $salt === $user['password'] ? $_SESSION['password'] = $password : '';

    if (!$_SESSION['login']) {
      header("Location: ../signInOrReg.php?login=false");
      exit('error login');
    }

    if (!$_SESSION['password']) {
      header("Location: ../signInOrReg.php?password=false");
      exit('error password');
    }

    if ($_SESSION['login'] && $_SESSION['password']) {
      header("Location: ../templates/personalAccount.php");
      exit('All right!');
    }
  }

  if ($_POST['signOut']) {
    unset($_SESSION['name']);
    unset($_SESSION['login']);
    unset($_SESSION['password']);
    session_destroy();
    header('Location: ../signInOrReg.php');
  }