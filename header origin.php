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
  <script src="./js/script.js"></script>
  <script src="./js/header.js"></script>
  <!-- CSS -->
  <link rel="stylesheet" href="./css/reset.css">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/header.css">
  <link rel="stylesheet" href="./css/footer.css">
  
  <title>템플릿 사이트 제작</title>
</head>
<body>
  <header>
    <div class="header-top">
      <nav>
        <a href="#">
        <i class="fa-solid fa-right-to-bracket"></i>
          로그인</a>
        <a href="#">
        <i class="fa-regular fa-address-card"></i>
          회원가입</a>
        <a href="#">
        <i class="fa-solid fa-hashtag"></i>
          SNS </a>
      </nav><!-- nav -->
    </div><!-- header-top -->

    <div class="header-bottom">
      <h1>
        <a href="./index.php"><img src="./img/icon_logo/logo.gif" alt="logo"></a>
      </h1>
      <nav class="gnb gnb_lg">
       <?php include "menu.php"?>
      </nav>
      <button class="m_btn">
      <i class="fa-solid fa-bars"></i>
      <i class="fa-solid fa-xmark"></i>
      </button><!-- button -->
    </div><!-- header bottom -->
    
    <nav class="gnb gnb_sm">
      <?php include "menu.php"?>
    </nav>
  </header>