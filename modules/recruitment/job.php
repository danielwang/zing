<?php include '../../base.php' ?>
<?php startblock('page') ?>
<div class="page-header">
  <h1>Human Resources Officer</h1>
</div>
<div class="row row-gap">
  <div class="col-sm-8">
    <div class="pu-panel panel">
           <div class="panel-heading">
               <h4 class="panel-title">Position info</h4>
           </div>
           <div class="panel-body">
          <?php include ("${resURL}components/_form.html"); ?>
        </div>
      </div>
  </div>
  <div class="col-sm-4">
      <?php include ("${resURL}components/_tabs.html"); ?>
  </div>
</div>
<?php endblock() ?>