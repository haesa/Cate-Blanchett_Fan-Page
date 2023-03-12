<?php $cwd = getcwd(); ?>
<header class="header">
  <div class="menu">
    <button alt="menu_button" class="menu_button" onclick='openNav()'>
      <?php
      if($cwd=='C:\Bitnami\wampstack-8.0.1-0\apache2\htdocs'){
        echo '<img src="./images/menu_button.png"/>';
      } else {
        echo '<img src="../images/menu_button.png"/>';
      }?></button>
    <!--Menu Slides-->
    <ul>
      <?php
      if(isset($_SESSION['is_login'])) { ?>
        <li>
          <a href="#">
            <span class="menu_title"><?php echo $_SESSION['userid']; ?></span>
          </a>
        </li>
        <li>
          <a href="./member/logout.php">
            <span class="menu_title">LOGOUT</span>
          </a>
        </li>
      <?php } else { ?>
        <li>
          <a href="login.php">
            <span class="menu_title">LOGIN</span>
          </a>
        </li>
      <?php } ?>

      <br>
      <li>
        <a href="notice.php">
          <span class="menu_title">NOTICE</span>
        </a>
      </li>
      <li>
        <a href="board.php">
          <span class="menu_title">게시판</span>
        </a>
      </li>
    </ul>
  </div>
  <div class="title">
    <?php
      if($cwd=='C:\Bitnami\wampstack-8.0.1-0\apache2\htdocs'){
        echo '<a href="./mainpage.php"><img src="./images/KATE BLANCHETT.png"/></a>';
      } else {
        echo '<a href="../mainpage.php"><img src="../images/KATE BLANCHETT.png"/></a>';
      }
     ?>
  </div>
</header>
