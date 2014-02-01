<?php

$select_users = 'SELECT * FROM user';
$res_select_users = mysql_query($select_users);
while($user = mysql_fetch_assoc($res_select_users)){
  $users[] = $user;
}
