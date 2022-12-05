$(function(){
  $(window).load(function(){
		var $container = $('.isotope-gallery-section ul');
		var filterSelect ="*"
		fn_isotope()
		function fn_isotope(){
			$container.isotope({
				filter: filterSelect,
				animationOptions: {
					duration: 750,
					easing: 'linear',
					queue: false
				}//animationOptions
			})//isotope
		}//fn
		$('.btn-grp button').click(function(){
			filterSelect = $(this).val()
			fn_isotope()
      $('.btn-grp button').removeClass('active')
      $(this).addClass('active')
		})//click	
		$(window).resize(function(){
			fn_isotope()
		})//resize
	})//load

})//document.ready