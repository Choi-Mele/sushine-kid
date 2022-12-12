<?php include "sub_header.php" ?>
<script src="./js/store.js"></script>
<script src="./js/sub-gallery-justify.js"></script>
<h2 class="sub-title"> 갤러리 (Justify)</h2>

<section class="justify-gallery-section">
     
</section>
<script>
  $('.justify-gallery-section').prepend(`<div class="justify-gallery"></div>`)

  galleryArr.forEach((v) => {
    $('.justify-gallery-section .justify-gallery').append(`
          <a href="#">
            <img src="${v.path2}">
            <div>${v.desc}</div>
          </a>
       `) //append
  }) //forEach


</script>
<?php include "sub_footer.php" ?>