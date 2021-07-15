<?php

  // Задание №3

  function add($a, $b) {
    return $a + $b;
  }

  function sub($a, $b) {
    return $a - $b;
  }

  function div($a, $b) {
    return $a / $b;
  }

  function mul($a, $b) {
    return $a * $b;
  }

  // Задание №4

  function mathOperation($arg1, $arg2, $operation) {
    switch($operation) {

      case 'addition':
        return add($arg1, $arg2);
      
      case 'subtraction':
        return sub($arg1, $arg2);

      case 'division':
        return div($arg1, $arg2);

      case 'multiplication':
        return mul($arg1, $arg2);
    }
  }