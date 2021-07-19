<?php

$i = 0;

do {
  if ($i === 0) {
    echo "$i - ноль. <br>";
  }

  if ($i % 2) {
    echo "$i - нечетное число. <br>";
  } elseif ($i !== 0) {
    echo "$i - четное число. <br>";
  }

  $i++;
} while ($i <= 10);