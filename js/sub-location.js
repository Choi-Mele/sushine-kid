$(function(){
  $('.company-map nav button').click(function(){
    $('.company-map nav button').removeClass('active')
    $(this).addClass('active')
    $('.company-map iframe, .company-map img').fadeOut(400)
    var n = $(this).val()
    $(`.pane${n}`).fadeIn(400)
  })//click

})//document.ready