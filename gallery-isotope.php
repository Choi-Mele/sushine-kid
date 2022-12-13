<?php include "sub_header.php" ?>
<script src="./js/store.js"></script>
<script src="./js/sub-gallery-isotope.js"></script>

<h2 class="sub-title"> 갤러리 (Isotope)</h2>

<section class="isotope-gallery-section">
  <div class="btn-grp">
    <button  value="*" class="active">
      <span class="lg">all</span>
      <span class="sm">A</span>
    </button>
    <button value=".category1" >
      <span class="lg">category1</span>
      <span class="sm">C1</span>
    </button>
    <button value=".category2" >
      <span class="lg">category2</span>
      <span class="sm">C2</span>
    </button>
    <button value=".category3" >
      <span class="lg">category3</span>
      <span class="sm">C3</span>
    </button>
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