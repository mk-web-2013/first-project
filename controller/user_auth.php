<?php require_once 'data/user_data.php';
if (isset($_SESSION['role'])) {// если пользователь авторизован
  // пытается ли он выйти
  if (isset($_POST['exit'])) {
    unset($_SESSION['role']);
    unset($_SESSION['user_name']);
    //session_destroy();
  }
} else {// если пользователь не авторизован
  if (isset($_POST['mylogin']) && isset($_POST['mypass'])) {
    require_once 'data/user_data.php';
    $select_user = "SELECT * FROM user WHERE login = 'admin' AND  `pass` = 'admin'";
    $res_select_user = mysql_query($select_user);
    if (mysql_num_rows($res_select_user) == 1){
      $auth_user = mysql_fetch_assoc($res_select_user);
      $_SESSION['role'] = $auth_user['role'];
      $_SESSION['user_name'] = $auth_user['name'];
      $_SESSION['user_ava'] = $auth_user['ava'];
    }
  }
}
