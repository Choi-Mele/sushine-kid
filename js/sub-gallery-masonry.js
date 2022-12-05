$(function(){

    /* -------------------masonry-------------------- */

    $(window).load(function(){
      $('.masonry-gallery-section').masonry(
        {itemSelector:'.masonry-gallery-section li'}
      )//masonry
    })//window.load

    /* ----------Scroll Motion----------------------- */

    function scrFn(){
      $(`.masonry-gallery-section li`).each(function(){
        var offsetTop = $(this).offset().top
        var liH = $(this).innerHeight()
        var meta = 0 + ( scrY - (offsetTop - winH*0.9 + liH * 0.5)) * 0.03
        
        $(this).find('img').css({'transform':`translateY(${meta}px)`})
      })//each
    }//scrFn
  
    scrFn()
    $(window).scroll(function(){
      scrFn()
    }).resize(function(){
      scrFn()    
    })
})//document.ready