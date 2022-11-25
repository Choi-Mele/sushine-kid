$(function(){

  //--------------작은사이즈 메뉴

  $(`.gnb_sm ul > li > a`).click(function(e){// 이벤트리스너 : e 
    e.preventDefault()//앵커의 기본 기능을 죽인다.
    $(`.gnb_sm ul>li>ul`).stop().slideUp()
    $(this).siblings('ul').stop().slideToggle()
    $(this).toggleClass('active')
    $(this).parent().siblings('li').children('a').removeClass('active')
    
  })//click

  $(`.header-bottom .m_btn`).click(function(){
    $(this).toggleClass('active')
    $(`.gnb_sm`).stop().slideToggle(200)
    $(`.gnb_sm ul>li>ul`).stop().slideUp()
    $(`.gnb_sm ul>li>a`).removeClass('active')
  })//click

  //---------------데스크탑사이즈 메뉴

  // 일종의 호버--------------

  $(`.gnb_lg ul > li`).mouseenter(function(){
    $(this).children('ul').stop().slideDown(200)
  })//mouseEnter
  
  $(`.gnb_lg ul > li`).mouseleave(function(){
    $(this).children('ul').stop().slideUp(200)
  })//mouseLeave

  //--------------------------

})//document.ready