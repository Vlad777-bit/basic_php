<?php

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