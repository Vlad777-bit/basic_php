<?php

function renderMenu($path = '') {?>

    <header>
      <a href="<?= $path ?>index.php"><img src="https://raw.githubusercontent.com/Vlad777-bit/static/master/e-bike/logo/e-bike.webp" alt="logo"></a> 
      <ul class="menu">
          <li><a class="menu_link" href="<?= $path ?>index.php">Главная</a></li>
          <li><a class="menu_link" href="<?= $path ?>catalog.php">Каталог</a></li>
          <li><a class="menu_link"href="<?= $path ?>signInOrReg.php">Войти</a></li>
      </ul>
    </header>

  <?php
}