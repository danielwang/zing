<?php include 'base.php' ?>
<?php startblock('page') ?>
      <div id="dockbody">
        <div class="row row-gap">
          <div class="col-sm-4">
             <?php include '_partials/widgets/event.html';?>
             <?php include '_partials/widgets/task.html';?>  
          </div>  
          <div class="col-sm-3">
              <?php include '_partials/widgets/profile.html';?>

              <div class="box">
                <img width="262" src="img/side2.PNG" style="margin-left: -20px;"/>
              </div>

              <?php include '_partials/widgets/jobs.html';?>
          </div>
          <div id="middleColumn" class="col-sm-5">
                <?php include '_partials/_social-feed.php';?>
          </div>
          
          
        </div>
      </div>
    </div>        
<?php endblock() ?>