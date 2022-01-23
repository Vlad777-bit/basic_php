<?php

  include_once('./getResult.php');

  $firstNum = (int)strip_tags($_POST['firstNumber']);
  $operator = $_POST['operator'];
  $secondNum = (int)strip_tags($_POST['secondNumber']);

  $result = mathOperation($firstNum, $secondNum, $operator);

  if ($result) {
    header("Location: ../form.php?result=$result");
  } else {
    header("Location: ../form.php?result=все поля должны быть заполнены");
  }  