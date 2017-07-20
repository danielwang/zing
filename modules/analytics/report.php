<?php include '../../base3.php' ?>

<?php startblock('page-title') ?>
  Reports
<?php endblock() ?>
<?php emptyblock('tag-line') ?>

<?php startblock('sub-page') ?>
<ul class="nav nav-pills">
  <li class="active"><a href="#">Home</a></li>
  <li><a href="#">Scheduler</a></li>
  <li><a href="#">History</a></li>
  <li><a href="#"><i class="fa fa-lg fa-plus-circle"></i></a></li>
</ul>
<?php endblock() ?>

<?php startblock('page') ?>
<div class="row row-gap">
  <?php for ($x = 0; $x <= 11; $x++) {?>
  <div class="col-sm-4">
      <?php include ("${resURL}components/_box.html");?>
  </div>
  <?php } ?>
</div>
<?php endblock()?>
