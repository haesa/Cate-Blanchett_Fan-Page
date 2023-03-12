<?php
  session_start();
  include './dbconn.php';
?>
<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php   $title = mysqli_real_escape_string($conn, $_POST['title']);
      $content = mysqli_real_escape_string($conn, $_POST['content']);

      $sql="insert into article (article_id ,title, content, writer, date)
                            values(null, '".$title."', '".$content."', '".$_SESSION['userid']."', NOW());";

      $result = mysqli_query($conn, $sql);
      if($result){
 ?>
    <script>
        alert("<?php echo "글이 등록되었습니다."?>");
        location.replace("./board.php");
    </script>
    <?php
    } else{
            echo "FAIL";
    }

    mysqli_close($conn);
    ?>
  </body>
</html>
