
		//MASONRY
		$(document).ready(function(){
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
			$('#filter a').click(function (event) {
				$('a.selected').removeClass('selected');
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

			$('.card-footer button').click(function(){
				$(this).toggleClass('added');	
			});
			
			$('#title').keydown(function(){
				$('#autosuggestion2').show();
				
			});

		});