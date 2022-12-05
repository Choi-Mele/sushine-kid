<?php include "sub_header.php" ?>
<script src="./js/store.js"></script>
<script src="./js/sub-video.js"></script>
<h2 class="sub-title">홍보영상</h2>

<section class="video-section">
  <h3 class="hidden">비디오</h3>
  <div class="video-container">
    <iframe src="https://www.youtube.com/embed/TzNQs85fL1w" title="Youtube video practice"></iframe>
  </div>

</section>

<script>
  $('.video-section').append(`<ul></ul>`)

  videoArr.forEach((v) => {
    $('.video-section ul').append(`
        <li>
          <button value=${v}>
              <img src="https://img.youtube.com/vi/${v}/mqdefault.jpg">
          </button>
        </li>
       `) //append
  }) //forEach
</script>

<?php include "sub_footer.php" ?>