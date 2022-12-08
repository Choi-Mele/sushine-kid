<?php include "header.php" ?>
<script src="./js/sub.js"></script>

<section class="sub-visual">
  <!-- php sub_visual -->
  <!-- <video src="./video/background.mp4" autoplay muted loop></video> mp4가 표준 포맷! controls로 컨트롤 패널 등장가능 -->
  <script src="./js/store.js"></script>
  <script>
    subSliderArr.forEach(function(v,i){
        document.write(`
          <figure class="visual${i+1}">
            <img src="./img/sub/main${v.path}">
            <figcaption>
             <em>${v.title}</em>
             <p>${v.desc}</p>
            </figcaption>
          </figure>
        `)
    })
  </script>
  
  <div class="youtube">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/6u9sR_PLJN0?&playlist=6u9sR_PLJN0&vq=highres&iv_load_policy=3&autoplay=1&mute=1&loop=1&rel=0&showinfo=0&color=white&controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <img src="./img/youtube/560315.jpg">
  </div>
  
  <button class="indicator prev"><i class="fa-solid fa-arrow-left"></i></button>
  <button class="indicator next"><i class="fa-solid fa-arrow-right"></i></button>
  
  <div class="controls">
    <button class="btn1 active" value="1"></button>
    <button class="btn2" value="2"></button>
    <button class="btn3" value="3"></button>
    <button class="btn4" value="4"></button>
  </div>
</section>


  <div class="sub-center">
    <aside class="sidebar">
      <nav class="snb">
        <?php include "menu.php"?>
      </nav>
      
      <a href="tel:000-000-0000" class="sub-customer">
        <img src="./img/sub/sub_customer.gif">
      </a>
    </aside>
    <main class="sub-contents">
      <ul class="breadcrumb"> <!-- 빵부스러기... 현재위치를 알려주는걸 통칭 -->
        <li><i class="fa-solid fa-house-chimney"></i></li>
        <li class="category-label"></li>
        <li class="menu-label"></li>
      </ul>