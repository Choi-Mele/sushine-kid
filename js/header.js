$(function(){

  function fnHeaderMotion(){
    if(
      (winW < 1000 && scrY>=35) /* mobile */
      ||
      (winW >= 1000 && scrY>=105) /* deskTop */
      ){
      $(`header`).addClass('active')
    }else{
      $(`header`).removeClass('active')
    }//if

    if(scrY >= 100){
      $(`.top-btn`).fadeIn(200)
    }else{
      $(`.top-btn`).fadeOut(200)
    }
  }//fnHeaderMotion

  fnHeaderMotion()
  $(window).scroll(function(){
    fnHeaderMotion()
  }).resize(function(){
    fnHeaderMotion()
  })


  $(`.top-btn`).click(function(){
    /* window.scrollTo({top:0,behavior:'smooth'}) */
    $('body,html').stop().animate({'scrollTop':0})
  })

  /* gnb-lg--------------------------------------------------------------------------------- */
  $(`.gnb-lg>ul`).mouseenter(function(){
    $(`.gnb-lg>ul>li>ul`).stop().slideDown(300)
  })
  $(`.gnb-lg`).mouseleave(function(){
    $(`.gnb-lg>ul>li>ul`).stop().slideUp(300)
  })

  //-----------------------------------------------

  $(`.mbtn`).click(function(){
    $(this).toggleClass('active')
    $(`.gnb-sm`).stop().fadeToggle().toggleClass('active')
    $('.gnb-sm>ul>li>ul').stop().slideUp()
    $('.gnb-sm>ul>li>a').removeClass('active')
  })

  $(`.gnb-sm>ul>li>a`).click(function(e){
    e.preventDefault()
    $(`.gnb-sm>ul>li>ul`).stop().slideUp()
    $(this).siblings('ul').stop().slideToggle()
    $('.gnb-sm>ul>li>a').not($(this)).removeClass('active')
    $(this).toggleClass('active')
  })//click menu



})//document.ready