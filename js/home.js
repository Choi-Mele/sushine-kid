$(function () {
  responsive_carousel_horz(".home-visual", false, 3000, 7000); /* (클래스네임, 휠옵션, 캐러젤 평속, 멈춘후 속) */
  bubble('.bubble','./img/bubble')

  /* -----------------section1 motion ------------------------ */
  
  var type1 = new Type_effect('.home-section1 h2',70)
  var type2 = new Type_effect('.home-section2 h2',70)
  var type3 = new Type_effect('.home-section3 h2',70)
 
  type1.play()

  function home_section(){
    
    $('.home-section1 li, .home-section2 li').each(function(){
     var t = $(this).offset().top
     if(scrY >= t - winH*0.8){
      $(this).addClass('active')
    }else{
      $(this).removeClass('active')
     }
    })// home_section1,  home_section2



    $('.home-section3 li').each(function(){
     var t = $(this).offset().top
     var h = $(this).innerHeight()
     var meta = 0 + (scrY - (t - winH*0.5 + h*0.5))*0.08
     $(this).find('img').css({'transform':`scale(1.4) translateY(${meta}px)`})
    })//home_section3

    var t = $('.home-section2 h2').offset().top
    if(scrY > t - winH * 0.8){
      type2.play()
    }else{
      type2.reverse()
    }//if
    
    var t = $('.home-section3 h2').offset().top
    if(scrY > t - winH * 0.8){
      type3.play()
    }else{
      type3.reverse()
    }//if


  }//fn home_section1



  home_section()
  $(window).scroll(function(){
    home_section()
  }).resize(function(){
    home_section()
  })
}); //ready
