<div id="sidebar">
  <div class="box">
    <div class="box-header">Заголовок</div>
    <div class="box-content">
      Содержимое блока
    </div>
  </div>
  <?php include DIR_TEMPLATE . 'menu.php'; ?>
  <?php if(isset($_SESSION['role'])) {?>
  <div id="avatar_form" class="box">
    <div class="box-header">Обновление аватара</div>
    <div class="box-content" >
      <form method="post" enctype="multipart/form-data">
        <label class="requare">Аватар:</label><input type="file" name="ava" />
        <input type="submit" value="Обновить" />
      </form>
    </div>
  </div>
  <?php } ?>
  <?php include './template/auth.php'; ?>
</div>
