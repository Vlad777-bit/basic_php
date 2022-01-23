<?php
  include_once('./operator.php');

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