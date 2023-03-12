<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <script>alert("로그아웃되었습니다."); location.href="../mainpage.php"; </script>
  </body>
</html>
