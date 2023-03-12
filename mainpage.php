<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>MAIN</title>
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/slideshow.css">
    <script type="text/javascript" src="./script.js"></script>
  </head>
  <body class="main">
    <?php include './view/header.php';?>
    <main>
     <!-- Slideshow container -->
     <div class="slideshow-container">
      <!-- Full-width images with number and caption text -->
      <div class="mySlides fade" id=img1>
        <img src="./images/kate_blanchett.jpg" style="width:100%">
      </div>
      <div class="mySlides fade" id=img2>
        <img src="./images/kate_blanchett2.jpg" style="width:100%">
      </div>
      <div class="mySlides fade" id=img3>
        <img src="./images/kate_blanchett3.jpg" style="width:100%">
      </div>
      <!-- Next and previous buttons -->
      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>
    </main>
  </body>
</html>
