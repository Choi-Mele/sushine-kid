$(function(){
  /* 
  
      location.href = "http://google.com"  해당주소로 이동
      var addr = location.href    현재페이지의 주소를 뽑아옴
  
  */

  /* 
      var tt = "abcd 1234 가나다"
      str.match('ab') // ab 출력
      str.match('마') // null 출력
  */

    var addr = location.href

    var category 
    var menu 

    if(addr.match('greet')){
      category = 1; menu = 1; // 1-1 이라는 뜻
    }else if(addr.match('video')){
      category = 1; menu = 2;
    }else if(addr.match('location')){
      category = 1; menu = 3;
    }else if(addr.match('biz_intro')){
      category = 2; menu = 1;
    }else if(addr.match('biz_area')){
      category = 2; menu = 2;
    }else if(addr.match('gallery-viewbox')){
      category = 3; menu = 1;
    }else if(addr.match('gallery-justify')){
      category = 3; menu = 2;
    }else if(addr.match('gallery-masonry')){
      category = 3; menu = 3;
    }else if(addr.match('gallery-isotope')){
      category = 3; menu = 4;
    }else if(addr.match('contact')){
      category = 4; menu = 1;
    }else if(addr.match('notice')){
      category = 5; menu = 1;
    }else if(addr.match('freeboard')){
      category = 5; menu = 2;
    }else if(addr.match('faq')){
      category = 5; menu = 3;
    }else if(addr.match('registration')){
      category = 6; menu = 1;
    }else if(addr.match('login')){
      category = 6; menu = 2;
    }

    $(`.snb .category${category}`).show()
    $(`.snb .menu${category}-${menu}`).addClass('active')
    
    
    var categoryLabel = $(`.snb .category${category} em`).text()
    $(`.breadcrumb .category-label`).text(categoryLabel)
    
    var menuLabel = $(`.snb .menu${category}-${menu}`).text()
    $(`.breadcrumb .menu-label`).text(menuLabel)

    /* $(`.sub-visual .visual${category}`).show()// .addClass('active') figure : display:none인객체를 show()라고 해서 바로 켜지게되면 addClass(모션이)가 적용이 안됨 
    setTimeout(function(){
      $(`.sub-visual .visual${category}`).addClass('active')
    },1) */

    /*  또다른 방법은 FadeIn을 써서도 해결이 가능하다. but 바닐라문법에서는 fadeIn이 없기때문에 쓰지 않고 반드시 show와 setTimeout을 쓴다 */


    var n = 1
    var isClick = true
    var timeoutID

    var intervalID = setInterval(function(){
      n++
      fnChange()
    },3000)



    function fnChange(){
      if(n < 1) n=4
      if(n > 4) n=1
      $('.sub-visual figure').stop().fadeOut().removeClass('active')
      $(`.sub-visual .visual${n}`).stop().fadeIn().addClass('active')
      $(`.sub-visual .controls button`).removeClass('active')
      $(`.sub-visual .controls btn${n}`).addClass('active')
    }
    
    function fnClickCtrls(){
      isClick = false
      setTimeout(function(){
        isClick = true
      },500)
    }
    
    function fnAutoplay(){
      clearInterval(intervalID)
      clearTimeout(timeoutID) // 여러번 클릭 대응
      timeoutID = setTimeout(function(){
        intervalID = setInterval(function(){
          n++
          fnChange()
        },10000)// setTimeout intervalID
      },8000)// setTimeout intervalID
    }


    $(`.sub-visual .next`).click(function(){
      if(isClick===false) return false // 함수에 이걸 집어넣으면 함수만 중단되고 뒤의 다른것은 실행이 되어버린다.
      fnClickCtrls()
      n++
      fnChange()
      fnAutoplay()
    })
    $(`.sub-visual .prev`).click(function(){
      if(isClick===false) return false 
      fnClickCtrls()
      n--
      fnChange()
      fnAutoplay()
    })

    $(`.sub-visual .controls button`).click(function(){
      n = parseInt($(this).val())
      fnChange()
      fnAutoplay()
    })

    function fnYoutubeResize(){
      var imgW = $(`.sub-visual .youtube img`).innerWidth()
      var imgH = $(`.sub-visual .youtube img`).innerHeight()
   
      $(`.sub-visual .youtube iframe`).width(imgW)
      $(`.sub-visual .youtube iframe`).height(imgH)
     }//fnYoutubeResize
   
       
     fnYoutubeResize()
   
     $(window).load(function(){
       fnYoutubeResize()
     }).resize(function(){
       fnYoutubeResize()
     })
})//document.ready