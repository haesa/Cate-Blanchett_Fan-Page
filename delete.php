<?php
	include "./dbconn.php";

	$number = $_GET['number'];
	$sql = "delete from notice where notice_id=".$number.";";
	$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="ko">
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<?php
			if($result == false){
				echo '삭제에 실패했습니다.';
				error_log(mysqli_error($conn));
			} else { ?>
				<script type="text/javascript">alert("삭제되었습니다."); location.href='./notice.php';</script>
				<meta http-equiv="refresh" content="0 url=/" />
			<?php } ?>
	</body>
</html>
