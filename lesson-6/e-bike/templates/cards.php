<?php
    include('./config/config.php');
    include('./engine/getGoods.php');
?>
 
<div class="links">
    <?= renderCards($result, './public/', '223px') ?>
</div>