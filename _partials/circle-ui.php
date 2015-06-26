<nav class="circular-menu">

  <div class="circle open">
    <a href=""><img class="avatar-lg" src="img/emp/emp1.png"></a>
    <a href=""><img class="avatar-lg" src="img/emp/emp2.png"></a>
    <a href=""><img class="avatar-lg" src="img/emp/emp3.png"></a>
    <a href=""><img class="avatar-lg" src="img/emp/emp4.png"></a>
    <a href=""><img class="avatar-lg" src="img/emp/emp5.png"></a>
    <a href=""><img class="avatar-lg" src="img/emp/emp6.png"></a>
    <a href=""><img class="avatar-lg" src="img/emp/emp7.png"></a>
    <a href=""><img class="avatar-lg" src="img/emp/emp8.png"></a>
    <!--<a href=""><img class="avatar-lg" src="img/emp/emp9.png"></a>
    <a href=""><img class="avatar-lg" src="img/emp/emp10.png"></a>
    <a href=""><img class="avatar-lg" src="img/emp/emp11.png"></a> -->
  </div>
  
  <a href="" class="menu-button"><img class="avatar-xlg" src="img/emp/emp.jpg"></a>

</nav>

<style type="text/css">

.circular-menu {
  width: 500px;
  height: 500px;
  margin: 0 auto;
  position: relative;
  border-radius: 50%
}

.circle {
  width: 500px;
  height: 500px;
  opacity: 0.5;
  
  -webkit-transform: scale(0.5);
  -moz-transform: scale(0.5);
  transform: scale(0.5);

  -webkit-transition: all 0.4s ease-out;
  -moz-transition: all 0.4s ease-out;
  transition: all 0.4s ease-out;
}

.open.circle {
  opacity: 1;

  -webkit-transform: scale(1);
  -moz-transform: scale(1);
  transform: scale(1);
}

.circle a {
  text-decoration: none;
  color: white;
  display: block;
  height: 80px;
  width: 80px;
  line-height: 80px;
  margin-left: -40px;
  margin-top: -40px;
  position: absolute;
  text-align: center;

}

.circle a:hover {
  color: #eef;
}

.menu-button {
  position: absolute;
  top: calc(50% - 60px);
  left: calc(50% - 60px);
  text-decoration: none;
  text-align: center;
  color: #444;
  border-radius: 50%;
  display: block;
  height: 80px;
  width: 80px;
  line-height: 80px;
  padding: 10px;
}

</style>
<script type="text/javascript">
var items = document.querySelectorAll('.circle a');

for(var i = 0, l = items.length; i < l; i++) {
  items[i].style.left = (50 - 35*Math.cos(-0.5 * Math.PI - 2*(1/l)*i*Math.PI)).toFixed(4) + "%";
  
  items[i].style.top = (50 + 35*Math.sin(-0.5 * Math.PI - 2*(1/l)*i*Math.PI)).toFixed(4) + "%";
}

document.querySelector('.menu-button').onclick = function(e) {
   e.preventDefault(); document.querySelector('.circle').classList.toggle('open');
}
</script>
