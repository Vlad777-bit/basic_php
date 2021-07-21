<?php

  include 'task-4.php';
  include 'task-5.php';

  function translitAndSpacesDel($str) {
    return changeStr(translit($str));
  }

  echo translitAndSpacesDel("задание 9 готово");