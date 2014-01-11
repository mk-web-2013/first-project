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
          <div id="content"><?php echo $page['content']; ?></div>
          <div id="slider">
            <div id="slides">
              <div class="slide">
                Реклама 1
              </div><div class="slide">
                Реклама 2
              </div><div class="slide">
                Реклама 3
              </div><div class="slide">
                Реклама 4
              </div><div class="slide">
                Реклама 5
              </div><div class="slide">
                Реклама 6
              </div><div class="slide">
                Реклама 7
              </div>
            </div>
          </div>

        </div>
      </div>
      <?php include './template/footer.php';?>
    </div>
    <script type="text/javascript" src="<?php echo DIR_TEMPLATE;?>js/slider.js"></script>
    <script type="text/javascript" src="<?php echo DIR_TEMPLATE;?>js/jq1.js"></script>
  </body>
</html>
