<?php include 'base.php' ?>
<?php startblock('page') ?>

<div id="performance"> 
  <div class="row row-gap"> 
    <h4>Simon Cariss - My Contribution and Career Plan</h4> 
    <ul class="lifecycle" id="lifecycle">
      <li class="li complete">
        <div class="timestamp">
          <span class="date">31 Aug 2015<span>
        </div>
        <div class="status">
          <h4>Planning</h4>
        </div>
      </li>
      <li class="li complete">
        <div class="timestamp">
          <span class="date">22 Jan 2016<span>
        </div>
        <div class="status">
          <h4> Track & Review </h4>
        </div>
      </li>
      <li class="li">
        <div class="timestamp">
          <span class="date">31 Jul 2016<span>
        </div>
        <div class="status">
          <h4> Track & Review (End of Year) </h4>
        </div>
      </li>
      <li class="li">
        <div class="timestamp">
          <span class="date">31 Jul 2016<span>
        </div>
        <div class="status">
          <h4> Complete</h4>
        </div>
      </li>
     </ul>
  </div> 
  <div class="row"> 
    <div class="col-sm-2">
        <ul class="sidenav affix" data-spy="affix" data-offset-top="150">
          <li><a href="#">Start</a></li>
          <li class="active">
            <a href="#">My Contribution</a>

          </li>
          <li><a href="#">Career plan</a></li>
          <li><a href="#">Next Step</a></li>
        </ul>
    </div> 
    <div class="col-sm-10">
         <?php include '_partials/_item.php';?> 
         <?php for ($x = 0; $x <= 5; $x++) {?> 
          <div class="item box row collaps">
            <h4>Develop sustainable reliability plans to meet standard scheme <span class="status">Current</span></h4>
             <span class="pull-right">
              <div class="target-date xs">
                <div class="month">Jan</div>
                <div class="day">1</div>
                <div class="year">2016</div>
              </div>
            </span> 
            <span class="pull-right">
              <div class="c100 orange xs p15">
                  <span>15%</span>
                  <div class="slice">
                      <div class="bar"></div>
                      <div class="fill"></div>
                </div>    
              </div> 
            </span>
            
          </div>
         <?php } ?>
    </div>

  </div>
</div>
<?php endblock() ?>