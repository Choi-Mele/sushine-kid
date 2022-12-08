$(function(){

  var popupDisableTime = parseInt(localStorage.getItem('popupDisableTime'))

  if(popupDisableTime){
    var now = Date.now()
    var differ = now - popupDisableTime
    if(differ > 60 * 60 * 24 * 1000){
      localStorage.removeItem('popupDisableTime')
    }    
    $('.popup').hide()
  }


  $('.popup button').click(function(){
    
    if($('.popup input').prop('checked')){
      localStorage.setItem('popupDisableTime',Date.now())
    }

    $('.popup').fadeOut()
  })

})