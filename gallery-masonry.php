<?php include "sub_header.php" ?>
<script src="./js/store.js"></script>
<script src="./js/sub-gallery-masonry.js"></script>
<h2 class="sub-title"> 갤러리 (Masonry)</h2>

<section class="masonry-gallery-section">
<script>
     $('.masonry-gallery-section').prepend(`<ul></ul>`)

     galleryArr.forEach((v)=>{
       $('.masonry-gallery-section ul').append(`
       <li>
         <figure>
           <a href="#">
             <div class="">
              <img src="${v.path2}">
             </div>

             <figcaption>
               <h3>${v.title}</h3>
               <p>${v.desc}</p>
             </figcaption>
           </a>
         </figure>
       </li>
       `)//append
     })//forEach
  </script>
   
</section>

<?php include "sub_footer.php" ?>