<?php
if(isset($_SESSION['role'])){
  if(isset($_FILES['ava'])){
    move_uploaded_file($_FILES['ava']['tmp_name'], DIR_AVATAR . $_SESSION['user_ava']);
  }
}
