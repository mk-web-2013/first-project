<?php require_once 'data/user_data.php'; ?>
<!DOCTYPE html>
<html>
  <?php include DIR_TEMPLATE . 'meta.php'; ?>
  <body>
    <!--#header+#main_content>(#sidebar>(ul.menu>li#mi$.mi{Пункт $}*10)+#content)+#footer-->
    <div id="wrapper">
      <?php include DIR_TEMPLATE . 'header.php'; ?>
      <div id="main_content">
        <div>
          <div id="right-panel">
            <div>
              Панелька
            </div>
          </div>
          <?php include DIR_TEMPLATE . 'sidebar.php'; ?>
          <div id="content">
            <table class="users">
              <tr>
                <td>ID</td>
                <td>Login</td>
                <td>Пароль</td>
                <td>ФИО</td>
                <td>Роль</td>
              </tr>
              <?php foreach ($users as $user) { ?>
                <tr>
                  <td><?php echo $user['id']; ?></td>
                  <td><?php echo $user['login']; ?></td>
                  <td><?php echo $user['pass']; ?></td>
                  <td><?php echo $user['name']; ?></td>
                  <td><?php echo $user['role']; ?></td>
                </tr>
              <?php } ?>
            </table>
          </div>
        </div>
      </div>
      <?php include './template/footer.php'; ?>
    </div>
  </body>
</html>
