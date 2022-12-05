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
    <div class="indicator">
      <!-- class name 고정 -->
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
  $('.home-visual .col_width').append('<ul class="img_container"></ul>') /* 클래스명, 객체 고정 */
  subSliderArr.forEach((v, i) => {
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
  <section class="home-section home-section1">
    <div class="main-title">
      <h2 id="type1"><span>quick menu</span></h2>
      <p>메뉴를 클릭하시면 해당 메뉴로 이동합니다</p>
    </div>
  </section><!-- home-section1 -->
  <script>
    $('.home-section1').append('<ul></ul>')

    window.quickMenuArr.forEach(function(v) {
      $('.home-section1 ul').append(`
      <li>
        <a href="${v.url}">
          <figure>
            <img src="${v.path}">
            <svg viewBox="0 0 300 300">
              <path pathLength="1" d="M224 21.8 76 21.8 2 150 76 278.2 224 278.2 298 150z"/>
            </svg>
          </figure>
          <h3>${v.title}</h3>  
          <p>${v.desc}</p>
        </a>
      </li>
      `)
    }) //forEach
  </script>
</main>
















<?php include "footer.php" ?>