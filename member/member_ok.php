<?php
	include '../dbconn.php';

	//중복 금지

	$userid = mysqli_real_escape_string($conn, $_POST['userid']);
	$userpw = password_hash($_POST['userpw'], PASSWORD_DEFAULT);
	$username = mysqli_real_escape_string($conn, $_POST['name']);
	$sql = "
	INSERT INTO user (user_id, user_name, user_pw, created) VALUES('".$userid."', '".$username."', '".$userpw."', NOW());";
	$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="ko">
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<script type="text/javascript">alert('회원가입이 완료되었습니다.');</script>
		<meta http-equiv="refresh" content="0 url=../mainpage.php">
	</body>
</html>
