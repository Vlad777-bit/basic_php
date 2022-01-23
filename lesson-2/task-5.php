<?php

  // Задание №5

  function power($val, $pow) {

    if (!$pow) {
      return 1;
    }

    return $pow === 1 ? $val : $val * power($val, $pow - 1);
  }

  echo power(4, 2);

  // Либо можно через if else
  
  // function power($val, $pow) {
  //   if ($pow === 1) {
  //     return $val;
  //   }

  //   if ($pow === 0) {
  //     return 1;
  //   }

  //   return $val * power($val, $pow - 1);
  // }
