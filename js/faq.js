$(function(){

  $(`.faq-section ul li .q`).click(function(){
    $(`.faq-section ul li .q`).not($(this)).removeClass('active')
    $(this).toggleClass('active')
    $(`.faq-section ul li .a`).stop().slideUp()
    $(this).siblings('.a').stop().slideToggle()
  })//click


})//document.ready