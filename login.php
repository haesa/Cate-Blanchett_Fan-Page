<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>회원가입 및 로그인</title>
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/login.css">
    <script type="text/javascript" src="./script.js"></script>
  </head>
  <body class="main">
    <?php include './view/header.php'; ?>

    <main>
      <!--Making ID-->
      <div class= "main_main">
        <h2>LOGIN</h2>
        <div class= "login_box">
   			  <form method="post" action="./member/login_ok.php">
   			    <table align="center" border="0" cellspacing="0" width="300">
              <tr>
                <td width="130" colspan="1">
                  <input type="text" name="userid" class="inph" placeholder="ID">
                </td>
                <td rowspan="2" align="center" width="100" >
                  <button type="submit" class="btn" >로그인</button>
                </td>
              </tr>
              <tr>
                <td width="130" colspan="1">
                  <input type="password" name="userpw" class="inph" placeholder="PW">
                </td>
              </tr>
              <tr>
                <td colspan="3" align="center" class="mem">
                  <a href="./member/member.php">회원가입 하시겠습니까?</a>
                </td>
              </tr>
            </table>
          </form>
        </div>
      </div>
    </main>
  </body>
</html>
