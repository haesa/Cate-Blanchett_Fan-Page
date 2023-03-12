<?php
  session_start();
  include './dbconn.php';

  $number = $_GET['number'];
  $sql = "select notice_id ,title, content, writer, date from notice where notice_id =".$number.";";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result);
 ?>
<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/view.css">
  </head>
  <body>
    <?php include './view/header.php'; ?>
    <div class="wrap">
      <div class="contents">
        <table class="view_table" align=center>
          <tr>
            <td class="view_title">제목</td>
            <td colspan="4" class="view_title"><?php echo $row['title']?></td>
          </tr>
          <tr>
            <td class="view_writer">작성자</td>
            <td class="view_writer2"><?php echo $row['writer']?></td>
            <td class="view_date">작성 날짜</td>
            <td class="view_date2"><?php echo $row['date']?></td>
          </tr>
          <tr>
            <td colspan="4" class="view_content" valign="top">
            <?php echo $row['content']?></td>
          </tr>
        </table>
        <!-- MODIFY & DELETE -->
        <div class="view_btn">
          <button class="view_btn1" onclick="location.href='./notice.php'">목록으로</button>
          <?php
          if($_SESSION['userid'] == 'siss'){ ?>
            <button class="view_btn1" onclick="location.href='./modify.php?number=<?=$number?>'">수정</button>
            <button class="view_btn1" onclick="location.href='./delete.php?number=<?=$number?>'">삭제</button>
            <? } ?>
        </div>
      </div>
    </div>
  </body>
</html>
