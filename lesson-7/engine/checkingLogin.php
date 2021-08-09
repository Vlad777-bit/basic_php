<?php
  include ('./session.php');
  include ('../config/config.php');

  $salt = "qwerasdzxc";

  $login = $_SESSION['login'] ? trim(strip_tags($_SESSION['login'])) : "";
  $password = $_SESSION['password'] ? trim(strip_tags($_SESSION['password'])) : "";
  $password = $salt . md5($password) . $salt;

  $sql = "select id from users where login='$login' and password='$password'";

  $result = mysqli_query($connect,$sql) or die("Error: " . mysqli_error($connect));

  if(mysqli_num_rows($result) && $login === 'admin'){
      $_SESSION['login'] = $login;
      $_SESSION['password'] = $_SESSION['password']; 

      header("Location: ../admin/admin.php");
  } elseif (mysqli_num_rows($result)) {
      $_SESSION['login'] = $login;
      $_SESSION['password'] = $_SESSION['password'];

      header("Location: ../templates/personalAccount.php"); 
  } else {
    header("Location: ../signInOrReg.php?success=false"); 
  }
  