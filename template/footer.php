
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
  my_print($_GET, '_Get');
  my_print($_POST, '_Post');
  my_print($_REQUEST, '_Request');
  my_print($_COOKIE, '_Cookie');
  my_print($_SESSION, '_Session');
  my_print($_FILES, '_Files');
  if(!isset($_SESSION['a'])){$_SESSION['a']=1;}
  $_SESSION['a']++;
  ?>
</div>


