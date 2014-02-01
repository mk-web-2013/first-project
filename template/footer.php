
<div id="footer">
  <div>
    Подвал
    <div id="debug-panel">
      <?php
      my_print($_GET, '_Get');
      my_print($_POST, '_Post');
      my_print($_REQUEST, '_Request');
      my_print($_COOKIE, '_Cookie');
      my_print($_SESSION, '_Session');
      my_print($_FILES, '_Files');
      if (!isset($_SESSION['a'])) {
        $_SESSION['a'] = 1;
      }
      $_SESSION['a'] ++;
      ?>
    </div>
  </div>
</div>


