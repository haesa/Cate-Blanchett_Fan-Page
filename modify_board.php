<?php
 include './dbconn.php';

 $sql = "select * from article where article_id = ".$_GET['number'].";";
 $result = mysqli_query($conn, $sql);
 $row = mysqli_fetch_array($result);
 $title = htmlspecialchars($row['title']);
 $content = htmlspecialchars($row['content']);
 ?>
 <!DOCTYPE html>
 <html lang="ko">
  <head>
    <meta charset="UTF-8">
    <title>글 수정</title>
    <link rel="stylesheet" href="/css/modify.css" />
  </head>
  <body>
    <div class="board_write">
      <h4>글을 수정합니다.</h4>
      <div class="write_area">
        <form action="modify_board_ok.php?number=<?=$_GET['number']?>" method="post">
          <div class="in_title">
              <textarea name="title" id="utitle" rows="1" cols="55" value="<?=$title?>" maxlength="100" required></textarea>
          </div>
          <div class="wi_line"></div>
          <div class="in_content">
              <textarea name="content" id="ucontent" value="<?=$content?>" required></textarea>
          </div>
          <div class="bt_se">
              <button type="submit">글 수정</button>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
