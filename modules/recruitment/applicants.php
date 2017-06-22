<?php include '../../base.php';?>
<?php startblock('top') ?>
  <?php include ("${resURL}partials/submenu.html"); ?>
<?php endblock()?>
<?php startblock('page')?>
<div class="row">
  <div class="col-sm-8 col-sm-offset-2">
    <?php include ("${resURL}components/_table-people.html");?>
  </div>
</div>
<?php endblock()?>
