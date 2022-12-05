<?php include "header.php" ?>
<script src="./js/store.js"></script>
<script src="./js/home.js"></script>
  <section class="home-visual">
    <div class="slider">

      <img class="slider-bg" src="./img/background.jpg" alt="">
      
      <div class="bubble bubble-particle">

      </div>

      <div class="col_width">
      </div><!-- col_width -->
      <div class="indicator"> <!-- class name 고정 -->
        <button></button>
        <button></button>
        <button></button>
        <button></button>
      </div><!-- indicator -->
      <button class="cursor prev"><i class="fa-solid fa-arrow-left"></i></button>
      <button class="cursor next"><i class="fa-solid fa-arrow-right"></i></button>
    </div><!-- slider -->
  </section>

    <script>
      $('.home-visual .col_width').append('<ul class="img_container"></ul>')/* 클래스명, 객체 고정 */
      subSliderArr.forEach( (v,i) => {
        $('.home-visual .col_width ul').append(`
          <li>
            <figure class="inner">
              <img src="./img/sub/main${v.path}">
              <figcaption>
                <em>${v.title}</em>
                <p>${v.desc}</p>
              </figcaption>
            </figure>  
          </li>
        `)

      })
    </script>

  <main>
    FirstPage Index
  </main>
















<?php include "footer.php" ?>