$(function(){
  
  /* viewbox plugin */
  $(window).load(function(){
      $('.viewbox-gallery-section a').viewbox()
  })//window.load

  /* scroll motion */
  function scrFn(){
    $(`.viewbox-gallery-section li`).each(function(){
      var offsetTop = $(this).offset().top
      
      if(scrY >= offsetTop - winH*0.9){
        $(this).addClass('active')
      }else{
        $(this).removeClass('active')
      }//if
    })//each
  }//scrFn

  scrFn()
  $(window).scroll(function(){
    scrFn()
  }).resize(function(){
    scrFn()    
  })
  

})//document.ready
