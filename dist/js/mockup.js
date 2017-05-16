$(function($) {
  var $body = $('body');
  // On click, capture state and save it in localStorage
  $($.AdminLTE.options.sidebarToggleSelector).click(function() {
    localStorage.setItem('sidebar', $body.hasClass('sidebar-collapse') ? 1 : 0);
  });

  // On ready, read the set state and collapse if needed
  if (localStorage.getItem('sidebar') === '0') {
    $body.addClass('disable-animations sidebar-collapse');
    requestAnimationFrame(function() {
      $body.removeClass('disable-animations');
    });
  }
  submenuShadow();
});

$(document).ready(function() {
  $('.nav-tabs a').click(function(e) {
    $(this).tab('show')
  })
});

function submenuShadow(){
    var header = $('.submenu');
    $(window).scroll(function(){
        if($(window).scrollTop() <= 30){
       		header.css('box-shadow', '0px 0px ' + $(window).scrollTop() + 'px rgba(0, 0, 0, 0.4)');
        } else {
          header.css('box-shadow', '0px 0px 30px rgba(0, 0, 0, 0.4)');
        }
    });
};
