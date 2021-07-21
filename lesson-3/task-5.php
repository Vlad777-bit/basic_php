<?php

// Моя собственная реализация 

// function changeStr($str) {
//   for ($i = 0; $i < strlen($str); $i++) {
//     echo ($str[$i] == " ") ? $str[$i] = "_" : $str[$i];
//   }
// }

// Пример взят из документации https://www.php.net/manual/ru/function.preg-replace.php

function changeStr($str) {
  $string = $str;
  $pattern = '/\s/';
  $replacement = '_';

  return preg_replace($pattern, $replacement, $string);
}

// Этот тоже из документации https://www.php.net/manual/ru/function.str-replace.php

// function changeStr($str) {
//   return str_replace(" ", "_", $str);
// }

echo changeStr('hello world! How are you?' . '<br>');