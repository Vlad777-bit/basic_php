<?php

  // Задание №3

  function add($a, $b) {
    return $a + $b;
  }

  function sub($a, $b) {
    return $a - $b;
  }

  function div($a, $b) {
    return $b ? $a / $b : "Ошибка, на $b делить нельзя";
  }

  function mul($a, $b) {
    return $a * $b;
  }

  // Задание №4

  function mathOperation($arg1, $arg2, $operation) {
    switch($operation) {

      case '+':
        return add($arg1, $arg2);
      
      case '-':
        return sub($arg1, $arg2);

      case '/':
        return div($arg1, $arg2);

      case '*':
        return mul($arg1, $arg2);
    }
  }