<?php include '../../base3.php' ?>

<?php startblock('page-title') ?>
<h1>Employee Search</h1>
<?php endblock() ?>

<?php startblock('page') ?>
<div class="row row-gap">
  <?php for ($x = 0; $x <= 11; $x++) {?>
  <div class="col-sm-4">
      <?php include ("${resURL}components/_emp-card.html");?>
  </div>
  <?php } ?>
</div>

<?php endblock('page')?>
