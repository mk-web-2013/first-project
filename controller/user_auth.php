<?php
if(isset($_SESSION['role'])){// если пользователь авторизован
  // пытается ли он выйти
  if(isset($_POST['exit'])){
    unset($_SESSION['role']);
    unset($_SESSION['user_name']);
    //session_destroy();
  }
}else{// если пользователь не авторизован
  if(isset($_POST['mylogin'])&&isset($_POST['mypass'])){
    require_once 'data/user_data.php';
    if(isset($users[$_POST['mylogin']])){
      if($users[$_POST['mylogin']]['pass']==$_POST['mypass']){
        $_SESSION['role'] = $users[$_POST['mylogin']]['role'];
        //print_r($users[$_POST['mylogin']]);
        $_SESSION['user_name'] = $users[$_POST['mylogin']]['name'];
        $_SESSION['user_ava'] = $users[$_POST['mylogin']]['ava'];
      }
    }
  }
}
