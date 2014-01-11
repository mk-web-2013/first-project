<div id="sidebar">
  <div class="box">
    <div class="box-header">Заголовок</div>
    <div class="box-content">
      Содержимое блока
    </div>
  </div>
  <?php include DIR_TEMPLATE . 'menu.php'; ?>
  <div id="login" class="box">
    <div class="box-header">Форма входа</div>
    <div class="box-content" >
      <form>
        <label class="requare">Имя:</label><input type="text" name="firstname" />
        <label class="requare">Фамилия:</label><input type="text" name="lastname" />
        <label>Пароль:</label><input type="password" name="pass" />
        <label>Дата рождения:</label><input type="text" name="birthdate" />
        <input type="submit" value="Войти" />
      </form>
    </div>
  </div>
  <?php include './template/auth.php'; ?>
</div>
