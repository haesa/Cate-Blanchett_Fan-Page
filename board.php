<?php session_start();?>
<!DOCTYPE html>
<html  lang="ko">
  <head>
      <meta charset = 'utf-8'>
      <link rel="stylesheet" href="./css/header.css">
      <link rel="stylesheet" href="./css/list.css">
  </head>
  <?php
      if($_SESSION['is_login'] != true){
        echo "<script>alert('로그인하세요.'); location.href='./mainpage.php';</script>";
      }

      include './dbconn.php';

      $sql ="select * from article order by article_id desc;";
      $result = mysqli_query($conn, $sql);
      $total = mysqli_num_rows($result);
  ?>
  <body>
    <!-- header -->
    <?php include './view/header.php'; ?>
    <div class="list">
      <h2>게시판</h2>
      <div class="search_box">
        <form action="search_board_result.php" method="post">
          <input type="text" name="search" size="40" required="required" /> <button>검색</button>
        </form>
      </div>
      <table align = center>
        <thead align = "center">
          <tr>
            <td width = "50" align="center">번호</td>
            <td width = "500" align = "center">제목</td>
            <td width = "100" align = "center">작성자</td>
            <td width = "200" align = "center">날짜</td>
          </tr>
        </thead>
        <tbody>
            <?php
              while($rows = mysqli_fetch_assoc($result)){ //DB에 저장된 데이터 수 (열 기준)
                if($total%2==0){
            ?>     <tr class = "even">
                            <?php   }
                            else{
            ?>                      <tr>
                            <?php } ?>
                    <td width = "50" align = "center"><?php echo $total?></td>
                    <td width = "500" align = "center">
                    <a href = "view_board.php?number=<?php echo $rows['article_id']?>">
                    <?php echo $rows['title']?></td>
                      <td width = "100" align = "center"><?php echo $rows['writer']?></td>
                    <td width = "200" align = "center"><?php echo $rows['date']?></td>
                    </tr>
            <?php
                    $total--;
                    }
            ?>
        </tbody>
      </table>
      <div class = text>
        <a href="./write_board.php" class="btn">글쓰기</a>
      </div>

    </div>
  </body>
</html>
