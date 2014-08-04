$(document).ready(function() {
    $('dd.quickFlipCta').each(function(){    
    	$(this).click(function(){
            $('.quickFlipPanel .panel').hide();
    		var boxname = $(this).attr('id');
            $(this).children().first().addClass('clicked');
            $('.'+ boxname).show();
            $('#panel2').addClass('slideIn');
    	});
    });	


    $('.fa-unlock').click(function(){
    	$(this).removeClass('fa-unlock').addClass('fa-lock');	
    });
    // inserting objectives
    $('ul.obj_sublist li span').each(function(){  
        $(this).click(function(){
        	var obj = $(this).html();
            $('#obj').append('<span>' + obj +'</span>');
            slideOut();
        });

    });
    // inserting tags
    $('#tag-cloud li').each(function(){  
        $(this).click(function(){
            var tag = $(this).html();
            $('#tags').append('<span class="tag-cloud">' + tag +'</span>');
            slideOut();
        });
        
    });

    $('.mood img').click(function(){
        $('#mood').append('<img src="journal/images/face.png" />');
        slideOut();
    });
    $('.loc img').click(function(){
        $('#loc').append('<img src="journal/images/airport.png" />');
        slideOut();
    });
    $('.dev').click(function(){
        slideOut();
    });
    $('.att').click(function(){
        slideOut();
    });
    $('.360').click(function(){
        slideOut();
    });
   
    $('#switch').click(function(){
        $('#flipBoard').toggleClass('flip');
    });

    $('.close').each(function(){  
        $(this).click(function(){
            $(this).parent().fadeOut(500);
        });
    });

});

function slideOut(){
    $('#panel2').removeClass('slideIn');
}