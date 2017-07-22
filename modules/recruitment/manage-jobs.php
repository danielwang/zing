<?php include '../../base2.php';?>
<?php startblock('top') ?>
  <?php include ("${resURL}partials/submenu.html"); ?>
<?php endblock()?>
<?php startblock('page-title') ?>
 Manage Jobs
<?php endblock()?>
<?php startblock('page-body')?>
<div class="row">
  <div class="col-sm-12">
    <?php include ("${resURL}components/_table-jobs.html");?>
  </div>
</div>
<?php endblock()?>
