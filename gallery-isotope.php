<?php include "sub_header.php" ?>
<script src="./js/store.js"></script>
<script src="./js/sub-gallery-isotope.js"></script>

<h2 class="sub-title"> 갤러리 (Isotope)</h2>

<section class="isotope-gallery-section">
  <div class="btn-grp btn-grp-lg">
    <button  value="*" class="active">all</button>
    <button value=".category1" >category1</button>
    <button value=".category2" >category2</button>
    <button value=".category3" >category3</button>
  </div>
</section>
<script>
  $('.isotope-gallery-section').append(`<ul></ul>`)

  galleryArr.forEach((v) => {
    $('.isotope-gallery-section ul').append(`
        <li class="${v.class}">
          <a href="#">
            <h3>${v.title}</h3>
            <figure>
              <img src="${v.path}">
            </figure>
            <p>${v.desc}</p>
          </a>
        </li>
       `) //append
  }) //forEach
</script>

<?php include "sub_footer.php" ?>