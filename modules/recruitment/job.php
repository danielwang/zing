<?php include '../../base.php' ?>
<?php startblock('page-title') ?>
<h1>Senior graphic designer</h1>
<h4>Job ID: #1234567890</h4>
<?php endblock() ?>
<?php startblock('page') ?>
<div class="container content">
  <?php include ("${resURL}components/_wizard.html"); ?>
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
</div>
<?php endblock() ?>
