<?php
	session_start();
	include '../dbconn.php';
	?>
		<!DOCTYPE html>
		<html lang="ko">
			<head>
				<meta charset="utf-8">
				<title></title>
			</head>
			<body>
				<?php
				//POST로 받아온 아이디와 비밀번호가 비었다면 알림창을 띄우고 전 페이지로 돌아갑니다.
				if(!isset($_POST["userid"]) || !isset($_POST["userpw"])){
					echo '<script> alert("아이디나 패스워드 입력하세요"); history.back(); </script>';
				} else {
					//password변수에 POST로 받아온 값을 저장하고 sql문으로 POST로 받아온 아이디값을 찾습니다.
					$pwd = mysqli_real_escape_string($conn, $_POST['userpw']);
					$uid = mysqli_real_escape_string($conn, $_POST['userid']);
					$result = mysqli_query($conn, "select * from user where user_id='".$uid."';");
					$member = mysqli_fetch_array($result);
					$hash_pw = $member['user_pw'];	//$hash_pw에 POST로 받아온 아이디열의 비밀번호를 저장합니다.

					if(password_verify($pwd, $hash_pw)) { //만약 password변수와 hash_pw변수가 같다면 세션값을 저장하고 알림창을 띄운후 main.php파일로 넘어갑니다.
						$_SESSION['is_login'] = true;
						$_SESSION['userid'] = $uid;
						echo "<script>alert('로그인되었습니다.'); location.href='../mainpage.php';</script>";
					} else { // 비밀번호가 같지 않다면 알림창을 띄우고 전 페이지로 돌아갑니다
							echo "<script>alert('아이디 혹은 비밀번호를 확인하세요.'); history.back();</script>";
						}
				}
			?>

			</body>
		</html>
