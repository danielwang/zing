<?php include 'base.php'?>
<?php startblock('page')?>

 <div id="dockbody">
        <h2>Dock page 2</h2>
        <div class="row row-gap">
          <div class="col-sm-6">
             <?php include '_partials/_orgchart_small.html';?>
          </div>
          <div class="col-sm-4">
              <?php include '_partials/widgets/task.html';?>
              <?php include '_partials/widgets/profile.html';?>
              <?php include '_partials/widgets/jobs.html';?>
          </div>
        </div>
      </div>
    </div>
<?php endblock()?>
