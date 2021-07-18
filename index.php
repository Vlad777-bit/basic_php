<?php 
  // Задание №1
  // Установил комплект LAMP на Ubuntu Server 20.04


  // Задание №2
  // Разобрался


  // Задание №3
  $a = 5; 
  $b = '05';

  // В этом примере происходит неявное преобразование типов, т.е. строка преобразуется в число и ноль уберётся 
  var_dump($a == $b) . '<br>'; // Почему true?

  // Здесь уже явное преобразование типов, строка становиться числом и ноль отбрасывается 
  var_dump((int)'012345') . '<br>'; // Почему 12345?

  // Тут сравниваются разные типы данных и к тому же строгим сравнением 
  var_dump((float)123.0 === (int)123.0) . '<br>'; // Почему false?

  // Строка преобразуется в число и выходит false т.е. 0
  var_dump((int)0 === (int)'hello, world') . '<br>'; // Почему true?


  // Задание №5
  $a = 1;
  $b = 2;

  // В простом варианте можно использовать декремент, но он плох тем, что не является динамическим. 
  // $a = $b;
  // $b = --$b;

  /** Можно использовать побитовое исключающее ИЛИ, оно будет универсальным решение для любого целого числа
   * Для начала переводим числа в двоичную систему счисления 
   * Сложим полученные результаты 
   * Найти остаток от деления на 2, 0-чётное, 1-нечётное 
   * Переводим обратно в обычное число
   */

  $b = $a ^ $b;
  $a = $a ^ $b;
  $b = $a ^ $b;

  echo "a = " . $a . "<br>" . "b = " . $b;
