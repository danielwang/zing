<?php include '../../base3b.php' ?>

<?php startblock('page-title') ?>
  Employee Search
<?php endblock() ?>

<?php startblock('page-body') ?>
<div class="row row-gap">
  <?php for ($x = 0; $x <= 11; $x++) {?>
  <div class="col-sm-4">
      <?php include ("${resURL}components/_emp-card.html");?>
  </div>
  <?php } ?>
</div>

<?php endblock('page-body')?>
