<?php include "sub_header.php" ?>
<script src="./js/store.js"></script>
<script src="./js/sub-gallery-viewbox.js"></script>
  <h2 class="sub-title"> 갤러리 (Viewbox)</h2>
  <section class="viewbox-gallery-section">
  
  </section>

  <script>
     $('.viewbox-gallery-section').prepend(`<ul></ul>`)

     galleryArr.forEach((v)=>{
       $('.viewbox-gallery-section ul').append(`
       <li>
         <figure>
           <a href="${v.path}">
             <img src="${v.path}">
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
   
<?php include "sub_footer.php" ?>