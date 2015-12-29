<nav class="circular-menu">

  <div class="myteam circle open">
    <a href="#_">
      <sub></sub>
      <img class="avatar-lg" src="img/emp/emp1.png">  
    </a>
    <a href="#_"><img class="avatar-lg" src="img/emp/emp2.png"></a>
    <a href="#_"><img class="avatar-lg" src="img/emp/emp3.png"></a>
    <a href="#_"><img class="avatar-lg" src="img/emp/emp4.png"></a>
    <a href="#_"><img class="avatar-lg" src="img/emp/emp5.png"></a>
    <a href="#_"><sub></sub><img class="avatar-lg" src="img/emp/emp6.png"></a>
    <a href="#_"><img class="avatar-lg" src="img/emp/emp7.png"></a>
    <a href="#_"><img class="avatar-lg" src="img/emp/emp8.png"></a>
    <!--<a href="#_"><img class="avatar-lg" src="img/emp/emp9.png"></a>
    <a href="#_"><img class="avatar-lg" src="img/emp/emp10.png"></a>
    <a href="#_"><img class="avatar-lg" src="img/emp/emp11.png"></a> -->
  </div>
  <div class='pop'>
    <div class='content'>
      <p>Pellentesque habitant morbi tristique senectus feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
    </div>
  </div>
  <span class="menu-button"><i class="fa fa-users fa-lg"></i></span>

</nav>

<style type="text/css">
sub {
    background: #a3b941 none repeat scroll 0 0;
    bottom: -0.25em;
    display: block;
    height: 10px;
    position: absolute;
    width: 10px;
    border-radius: 50%;
    left: calc(50% - 5px);
    bottom: -6px;
}
.circular-menu {
  width: 500px;
  height: 500px;
  margin: 0 auto;
  position: relative;
}


.menu-button {
  position: absolute;
  top: calc(50% - 40px);
  left: calc(50% - 40px);
  text-decoration: none;
  text-align: center;
  color: #444;
  border-radius: 50%;
  display: block;
  height: 80px;
  width: 80px;
  line-height: 80px;
  padding: 10px;
  background: white;
}


</style>
<script type="text/javascript">
var items = document.querySelectorAll('.myteam a');
for(var i = 0, l = items.length; i < l; i++) {
  items[i].style.left = (50 - 35*Math.cos(-0.5 * Math.PI - 2*(1/l)*i*Math.PI)).toFixed(4) + "%";
  items[i].style.top = (50 + 35*Math.sin(-0.5 * Math.PI - 2*(1/l)*i*Math.PI)).toFixed(4) + "%";
}

document.querySelector('.menu-button').onclick = function(e) {
   e.preventDefault(); document.querySelector('.circle').classList.toggle('open');
}

$('.myteam a').on('click', function(){
  var left = $(this).position().left;
  var top = $(this).position().top + 36;
  console.log(left);
  $('.pop').css({
      "left": 'auto',
      "top": top
    });
  $('.pop, a').toggleClass('active');
  return false;
});
</script>
