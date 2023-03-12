<?php session_start();
  if(empty($_POST['search'])) {
    $search_word = "";
  } else {
    $search_word = $_POST['search'];
  }

  include "./dbconn.php";
  $sql = "SELECT * FROM article where title LIKE '%$search_word%';";
  $rs = mysqli_query($conn, $sql);
  $total = mysqli_num_rows($rs);
?>
<!DOCTYPE html>
<html  lang="ko">
  <head>
      <meta charset = 'utf-8'>
      <link rel="stylesheet" href="./css/header.css">
      <link rel="stylesheet" href="./css/list.css">
  </head>
  <body>
    <?php include './view/header.php'; ?>
    <div class="list">
      <h2>"<?echo $search_word;?>" 검색결과</h2>
      <div class="search_box">
        <form action="search_result.php" method="post">
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
              while($info = mysqli_fetch_assoc($rs)){ //DB에 저장된 데이터 수 (열 기준)
                if($total%2==0){
            ?>     <tr class = "even">
                            <?php   }
                            else{
            ?>                      <tr>
                            <?php } ?>
                    <td width = "50" align = "center"><?php echo $total?></td>
                    <td width = "500" align = "center">
                    <a href = "view_board.php?number=<?php echo $info['article_id']?>">
                    <?php echo $info['title']?></td>
                      <td width = "100" align = "center"><?php echo $info['writer']?></td>
                    <td width = "200" align = "center"><?php echo $info['date']?></td>
                    </tr>
            <?php
                    $total--;
                    }
            ?>
        </tbody>
      </table>
    </div>
  </body>
</html>
