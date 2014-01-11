
<div id="footer">
  <div>
    Подвал
    <form>
      <label>Имя:</label><input type="text" name="firstname" />
      <label>Фамилия:</label><input type="text" name="lastname" />
      <label>Пароль:</label><input type="password" name="pass" />
      <label>Дата рождения:</label><input type="date" name="birthdate" />
    </form>
  </div>
  <?php
  my_print($_GET, 'Get');
  my_print($_POST, 'Post');
  my_print($_REQUEST, 'Request');
  ?>
</div>


