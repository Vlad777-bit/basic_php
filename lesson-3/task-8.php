<?php

$regions = [
  'Московская область:' => ['Москва', 'Зеленоград', 'Клин'],
  'Ленинградская область:' => ['Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт'],
  'Волгоградская область:' => ['Волгоград', 'Волжский', 'Камышин', 'Урюпинск', 'Иловля']
];

function searchCity($char, $arr) {
  if (!is_array($arr) || !is_string($char)) {
    return print 'incorrect arguments.';
  }
  //счетчик неподходящих городов.
  $wrongCity = 0;
  //количество городов в массиве
  $cityCount = count($arr, COUNT_RECURSIVE) - count($arr);
  foreach ($arr as $key => $value) {
    for ($i = 0; $i < count($arr[$key]); $i++) {
      //для работы с кириллицей
      $explodeArr = preg_split('//u', $arr[$key][$i], 0, PREG_SPLIT_NO_EMPTY);
      //если первая буква совпадает с искомой, то выводим на экран
      if ($explodeArr[0] == $char) {
        echo implode($explodeArr) . '<br>';
      } else {
        $wrongCity++;
        // если счетчик неподходящих городов == количество городов в массиве, то выводим сообщение
        if ($wrongCity == $cityCount) {
          return print "Города на букву '{$char}' в массиве нет.";
        }
      }
    }
  }
}

searchCity('К', $regions);
