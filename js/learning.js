
//MASONRY
$(window).load(function(){
	var $container = $('#Lcontent');
	// init
	$container.isotope({
	  // options
	  columnWidth: 270,
	  itemSelector: '.item',
	  layoutMode: 'masonry'
	  
	});

	//FILTER
	$('#filter a').click(function(){
	  var selector = $(this).attr('data-filter');
		$container.isotope({ 
		filter: selector,
		animationOptions: {
		 duration: 750,
		 easing: 'linear',
		 queue: false,
	   }
	  });
	  return false;
	});
	$('#filter li').click(function (event) {
		$('li.selected').removeClass('selected');
		var $this = $(this);
		$this.addClass('selected');
		var selector = $this.attr('data-filter');
		$container.isotope({
			 filter: selector
		});
		return false;
		});

	$('#searchbox').keydown(function(){
		$('#autosuggestion').show();
		var $this = $(this);
		var lng = $this.val().length;
		if( lng >10){
			$('.media').fadeOut();
			$('#add-msg').fadeIn();
		}else{
			$('.media').fadeIn();
			$('#add-msg').fadeOut();
		}
	});

	$('#searchbox').focusout(function(){
		$('#autosuggestion').hide();
	});

	//$('.item').click(function(){
	//	$(this).toggleClass('added');	
	//});
	
	$('#title').keydown(function(){
		$('#autosuggestion2').show();
		
	});
	$('#multiple-search-icon').click(function () {
		$('#multiple-search-panel').slideToggle(300);
	});
	$('#multiple-search-panel li').click(function () {

		$(this).toggleClass('selected')

	});
});

$(document).ready(function(){
//filtering  
  	$('.circle').click(function(){
	  $('.vertical-timeline-block').fadeOut();
	  $(this).each(function(){
	  	 var status = $(this).attr( "attr-data");
	  	 $('.'+ status).fadeIn(500);
	  });
	});

	$('#switch-view button').click(function(){
	  $(this).each(function(){
	  	 $('#switch-view ~ div').hide();
	  	 var view = $(this).attr( "attr-data");
	  	 $('.'+ view).fadeIn(500);
	  });
	});
});