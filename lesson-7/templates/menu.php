<?php

function renderMenu($path = '') {?>

    <header>
      <a href="<?= $path ?>index.php"><img src="https://raw.githubusercontent.com/Vlad777-bit/static/master/e-bike/logo/e-bike.webp" alt="logo"></a> 
      <ul class="menu">
        <li><a class="menu_link" href="<?= $path ?>index.php">Главная</a></li>
        <li><a class="menu_link" href="<?= $path ?>catalog.php">Каталог</a></li>

        <?php
          if (!($_SESSION['login'] && $_SESSION['password'])):?>

          <li><a class="menu_link"href="<?= $path ?>signInOrReg.php">Войти</a></li>
        <?php 
          
          elseif($_SESSION['login'] === 'admin' && $_SESSION['password']):?>

          <li><a class="menu_link"href="<?= $path ?>templates/personalAccount.php"><?= $_SESSION['name'] ?></a></li>
          <li><a class="menu_link"href="<?= $path ?>admin/admin.php">Админка</a></li>
        <?php

          else:?>

          <li><a class="menu_link"href="<?= $path ?>templates/personalAccount.php"><?= $_SESSION['name'] ?></a></li>
      </ul>

        <?php
          endif;
        ?>
    </header>

  <?php
}