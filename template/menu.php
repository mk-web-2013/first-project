<?php require_once(DIR_DATA . 'menu.php'); ?>
<div class="box menu">
  <div class="box-header">меню</div>

  <ul class="menu box-content">
    <?php foreach ($menu as $menu_key => $menu_value) {?>
    <li id="smi<?php echo $menu_key;?>" class="mi<?php echo (isset($menu_value['active']))?' active':'';?>"><a href="?route=<?php echo $menu_value['href'];?>"><?php echo $menu_value['name'];?></a></li>
    <?php } ?>
  </ul>
</div>