<!DOCTYPE html>
<html lang="kr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- font -->
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Nanum+Myeongjo:wght@400;700;800&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/6c43c79475.js" crossorigin="anonymous"></script>
  <!-- J.S -->
  <script src="http://code.jquery.com/jquery-latest.js" type="text/javascript"></script>
  <script src="./js/common.js"></script> <!-- 모든 JS의 위에 적용 -->
  <script src="./js/header.js"></script>
 
  <!-- CSS -->
  <link rel="stylesheet" href="./css/reset.css">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/header.css">
  <link rel="stylesheet" href="./css/footer.css">
  <link rel="stylesheet" href="./css/animation.css">
  <link rel="stylesheet" href="./css/sub-greet.css">
  <link rel="stylesheet" href="./css/sub-location.css">
  <link rel="stylesheet" href="./css/sub-biz-intro.css">
  <link rel="stylesheet" href="./css/sub-biz-area.css">
  <link rel="stylesheet" href="./css/sub-layout.css">
  <link rel="stylesheet" href="./css/sub_slider.css">
  
  <title>템플릿 사이트 제작</title>
</head>
<body>
  <header>
    <nav class="member-state">
      <ul>
        <li><a href="./index.php">처음으로</a></li>
        <li><a href="">로그인</a></li>
        <li><a href="">회원가입</a></li>
        <li><a href="">북마크</a></li>
      </ul>
    </nav>

    <div class="inner">
      <h1>
        <a href="./index.php"><img src="./img/icon_logo/logo.gif"></a>
        <span class="hidden">사이트로그</span>
      </h1>
    
      <button class="mbtn">
        <i class="fa-solid fa-bars open"></i>
        <i class="fa-solid fa-xmark close"></i>
      </button>
    </div>

    <nav class="gnb gnb-lg">
      <?php include "menu.php"?>
    </nav>
    <nav class="gnb gnb-sm">
      <?php include "menu.php"?>
    </nav>

    <button class="top-btn">
    <i class="fa-solid fa-angles-up"></i>
    </button>
  </header>