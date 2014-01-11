<!DOCTYPE html>
<html>
  <?php include DIR_TEMPLATE . 'meta.php'; ?>
  <body>
    <!--#header+#main_content>(#sidebar>(ul.menu>li#mi$.mi{Пункт $}*10)+#content)+#footer-->
    <div id="wrapper">
      <?php include DIR_TEMPLATE . 'header.php'; ?>
      <div id="main_content">
        <div>
          <?php include DIR_TEMPLATE . 'sidebar.php'; ?>
          <div id="content"><?php echo $page['content']; ?></div>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="<?php echo DIR_TEMPLATE;?>js/slider.js"></script>
    <script type="text/javascript" src="<?php echo DIR_TEMPLATE;?>js/jq1.js"></script>
  </body>
</html>
