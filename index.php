<?php include 'base.php' ?>
<?php startblock('page') ?>
      <div id="dockbody">
        <div class="row row-gap">  
          <div id="middleColumn" class="col-xs-12 col-sm-6">
               <?php include '_partials/_journal.php';?>
               <?php include '_partials/_timeline.php';?>
          </div>
          <div class="col-xs-12 col-sm-6">
               <?php include '_partials/_circle-ui.php';?>
          </div>

        </div>
      </div>
    </div>        
<?php endblock() ?>