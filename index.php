<?php include "header.php" ?>
<?php include "popup.php" ?>
<script src="./js/store.js"></script>
<script src="./js/home.js"></script>
<section class="home-visual">
  <div class="slider">

    <img class="slider-bg" src="./img/background.jpg" alt="">

<!--     <div class="bubble bubble-particle">

    </div> -->

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
      <h2><span>quick menu</span></h2>
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
  <section class="home-section home-section2">
    <div class="inner">
      <div class="main-title">
        <h2><span>C/S CENTER</span></h2>
        <p>고객의 목소리에 귀 기울이는 선샤인이 되겠습니다</p>
      </div>
    </div>

  </section>
  <script>
    $('.home-section2 .inner').append(`<ul></ul>`)

    window.csArr.forEach(v => {
      $('.home-section2 ul').append(`
        <li>
          <a href="${v.url}">
            <svg viewBox="0 0 300 300">
              <path pathLength="1" d="M150 34.3 172.6 7.2 185.8 40 215.7 21.1 218 56.4 252.3 47.7 243.6 82 278.9 84.3 260 114.2 292.8 127.4 265.7 150 292.8 172.6 260 185.8 278.9 215.7 243.6 218 252.3 252.3 218 243.6 215.7 278.9 185.8 260 172.6 292.8 150 265.7 127.4 292.8 114.2 260 84.3 278.9 82 243.6 47.7 252.3 56.4 218 21.1 215.7 40 185.8 7.2 172.6 34.3 150 7.2 127.4 40 114.2 21.1 84.3 56.4 82 47.7 47.7 82 56.4 84.3 21.1 114.2 40 127.4 7.2z"/>
            </svg>
            <div class="textbox">
              ${v.icon}
              <h3>${v.title}</h3>
              <p>${v.desc}</p>
            </div>
          </a>
        </li>
      `) //append

    }) //forEach
  </script>

  <section class="home-section home-section3">
    <div class="main-title">
      <h2><span>Latest gallery</span></h2>
      <p>선샤인의 최신소식을 전해드립니다</p>
    </div>
  </section>
  <script>
    $('.home-section3').append(`<ul></ul>`)
    
    galleryArr.forEach((v,i) => {
      
      if(i>=6) return false

        $('.home-section3 ul').append(`
          <li>
            <a href="#">
              <div class="inner">
                <figure>
                  <img src="${v.path}">
                </figure>
                <h3>${v.title}</h3>
              </div>
            </a>
          </li>
        `)
        
      
    })
  </script>
</main>
















<?php include "footer.php" ?>