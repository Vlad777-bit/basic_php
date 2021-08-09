<?php
  include ('./session.php');
  include ('../config/config.php');

  $salt = "qwerasdzxc";

  $login = $_SESSION['login'] ? trim(strip_tags($_SESSION['login'])) : "";
  $password = $_SESSION['password'] ? trim(strip_tags($_SESSION['password'])) : "";
  $password = $salt . md5($pass) . $salt;

  

  echo '<pre>';
  print_r ($_SESSION);
  echo '</pre>';