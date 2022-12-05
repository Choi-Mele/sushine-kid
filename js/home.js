$(function () {
  responsive_carousel_horz(".home-visual", false, 3000, 7000); /* (클래스네임, 휠옵션, 캐러젤 평속, 멈춘후 속) */
  bubble('.bubble','./img/bubble')

  /* -----------------section1 motion ------------------------ */
  
  var type1 = new Type_effect('#type1',70)

  type1.play()

  function home_section1(){
    
    $('.home-section1 li').each(function(){
     var t = $(this).offset().top
     if(scrY >= t - winH*0.8){
      $(this).addClass('active')
    }else{
      $(this).removeClass('active')
     }
    })//if
  }//fn home_section1

  home_section1()
  $(window).scroll(function(){
    home_section1()
  }).resize(function(){
    home_section1()
  })
}); //ready
