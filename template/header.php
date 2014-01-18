<div id="header">
  <div>
    <h1>ВЦ: <?php if(isset($_COOKIE['vc'])){echo $_COOKIE['vc'];} ?></h1>
    <h2><?php if(isset($_SESSION['a'])){echo $_SESSION['a'];$_SESSION['b']='abcц';} ?></h2>
    <div class="logo">
      <img src="<?php echo DIR_TEMPLATE; ?>imgs/png/logo.png" alt="logo asa web" />
    </div>
    <div class="menus">
      <div class="common-menu">
        <ul>
          <li id="mi1" class="mi active"><a href="#">Login</a></li><li id="mi2" class="mi"><a href="#">Sitemap</a></li><li id="mi3" class="mi"><a href="#">Contact Us</a></li>
        </ul>
      </div>
      <div class="main-menu">
        <ul>
          <li id="mmi1" class="mi active">
            <ul>
              <li>
                <a href="#">Пункт 1.1</a>
              </li>
              <li>
                <a href="#">Пункт 1.2</a>
              </li>
              <li>
                <a href="#">Пункт 1.3</a>
              </li>
            </ul>
            <a href="?route=home">Home</a>
          </li><li id="mmi2" class="mi"><a href="?route=aboutus">About Us</a></li><li id="mmi3" class="mi"><a href="#">News</a>
            <ul>
              <li>
                <a href="#">Пункт 3.1</a>
              </li>
              <li>
                <a href="#">Пункт 3.2</a>
              </li>
              <li class="active">
                <a href="#">Пункт 3.3</a>
                <ul>
                  <li>
                    <a href="#">Пункт 3.3.1</a>
                  </li>
                  <li>
                    <a href="#">Пункт 3.3.2</a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="#">Пункт 3.4</a>
              </li>
              <li>
                <a href="#">Пункт 3.5</a>
              </li>
            </ul>
          </li><li id="mmi4" class="mi"><a href="#">Recruit</a></li><li id="mmi5" class="mi"><a href="?route=contacts">Contacts</a></li>
        </ul>
      </div>
    </div>
    <div id="curr-page">
      <h2>Recruit</h2>
      <div>Найм</div>
    </div>
    <div id="curr-page-description">
      <div class="slogan">Слоган в контексте текущей страницы</div>
      <div class="description">Описание текущей страницы</div>
    </div>
  </div>
</div>