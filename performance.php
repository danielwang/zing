<?php include 'base.php' ?>
<?php startblock('page') ?>

<div id="performance"> 
  <div class="row row-gap"> 
    <h4>Daniel Wang - My Contribution and Career Plan</h4> 
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
        <ul>
          <li>Start</li>
          <li>My Contribution</li>
          <li>Career plan</li>
          <li>Next Step</li>
        </ul>  
    </div> 
    <div class="col-sm-10">
         <?php include '_partials/_item.php';?> 
         <?php for ($x = 0; $x <= 5; $x++) {?> 
          <div class="item box row collaps">
            <h4>Develop sustainable reliability plans to meet standard scheme <span class="status">Completed</span></h4>
             <span class="pull-right">
              <div class="target-date xs">
                <div class="month">Jan</div>
                <div class="day">1</div>
                <div class="year">2016</div>
              </div>
            </span> 
            <span class="pull-right">
              <div class="c100 green xs p15">
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
 
<?php include '_partials/foot.html';?>
<?php endblock() ?>