$(document).ready(function(){
	  //filtering  
	  $('#filters button').click(function(){
		  //$('#gtasks').hide();
		  $('.media').hide();
		  $(this).each(function(){
		     if ($(this).hasClass('pf')){
		         console.log('pf');
		         $('#pf').fadeIn(500);
		     }else if ($(this).hasClass('dv')){
		          console.log('dv');
		         $('#dv').fadeIn(500);
		     }else if ($(this).hasClass('cp')){
		          console.log('cp');
		         $('#cp').fadeIn(500);
		     }else if ($(this).hasClass('sc')){
		          console.log('sc');
		         $('#sc').fadeIn(500);
		     }else if ($(this).hasClass('ga')) {
		          console.log('ga');
		         $('#ga').fadeIn(500);
		     }else {
		     	   $('.media').fadeIn(500);	
		     	}
		  });
		})
	});