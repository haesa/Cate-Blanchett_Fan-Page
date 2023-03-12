<?php
  include "./dbconn.php";

  $title = $_POST['title'];
  $content = $_POST['content'];

  $sql="
    UPDATE article
      SET
        title='{$title}',
        content='{$content}'
      WHERE
        article_id=".$_GET['number'].";";
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
      echo '문제가 발생했습니다. 다시 시도해 주십시오.';
      error_log(mysqli_error($conn));
    } else {
    ?>
      <script type="text/javascript">alert("수정되었습니다."); </script>
      <meta http-equiv="refresh" content="0 url=./board.php">
    <?php } ?>
  </body>
</html>
