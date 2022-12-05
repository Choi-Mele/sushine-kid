$(function(){
  $('.video-section button').click(()=>{
    var id = $(this).val()
    $('.video-section iframe').attr('src',`https://www.youtube.com/embed/${id}`)
  })
})