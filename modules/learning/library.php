<?php include '../../base3b.php' ?>
<?php startblock('page-title') ?>
Learning
<?php endblock() ?>
<?php emptyblock('tag-line') ?>
<?php startblock('sub-page') ?>
<ul class="nav nav-pills">
  <li class="active"><a href="#">Library</a></li>
  <li><a href="#">Events</a></li>
  <li><a href="#"><i class="fa fa-lg fa-plus-circle"></i></a></li>
</ul>
<?php endblock() ?>
<?php startblock('page-body')?>
<div id="learning" class="row row-gap">
  <?php for ($x = 0; $x <= 11; $x++) {?>
  <div class="col-sm-4">
      <?php include ("${resURL}components/_learning-card.html");?>
  </div>
  <?php } ?>
</div>
<?php endblock('page-body')?>
