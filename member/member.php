<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>회원가입</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/member.css">
    <link rel="stylesheet" href="../css/footer.css">
    <script type="text/javascript" src="../script.js"></script>
  </head>
  <body>
    <!-- header -->
    <?php  include '../view/header.php'; ?>
    <main>
      <!--Making ID-->
			<div class="form">
  			<form method="post" action="member_ok.php">
  				<h3>회원가입 폼</h3>
  				<div class="write">
  					<br>
    				<fieldset>
    					<legend>입력사항</legend>
    					<table>
    						<tr>
    							<td>아이디</td>
    							<td><input type="text" size="35" name="userid" placeholder="아이디"></td>
    						</tr>
    						<tr>
    							<td>비밀번호</td>
    							<td><input type="password" size="35" name="userpw" placeholder="비밀번호"></td>
    						</tr>
    						<tr>
    							<td>이름</td>
    							<td><input type="text" size="35" name="name" placeholder="이름"></td>
    						</tr>
  						</table>
  						<br>
  						<input type="submit" value="가입하기" /><input type="reset" value="다시쓰기" />
  					</fieldset>
					</div>
  			</form>
			</div>
    </main>
    <footer class="content_info">
      푸터
    </footer>
  </body>
</html>
