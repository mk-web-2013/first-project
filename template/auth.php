<div id="avatar_form" class="box">
    <div class="box-header"><?php if(isset($_SESSION['role'])){ ?>Выход<?php } else{?>Вход<?php } ?></div>
    <div class="box-content" >
<?php if(isset($_SESSION['role'])){ ?>
<form method="post" enctype="multipart/form-data">
  <img src="<?php echo DIR_AVATAR . $_SESSION['user_ava'];?>" />
  <label><?php echo $_SESSION['user_name']; ?></label>
  <input type="submit" name="exit" value="Выйти" />
</form>
<?php } else{ ?>
<form method="post" enctype="multipart/form-data">
  <label>Login:<input type="text" id="mylogin" name="mylogin"></label>
  <label for="mypass">Пароль:</label><input type="password" id="mypass" name="mypass">
  <input type="submit" value="Войти" />
</form>
<?php } ?>
    </div>
  </div>

