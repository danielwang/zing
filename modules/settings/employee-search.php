<?php include '../../base.php'?>
<?php startblock('page')?>
<h2>Employee Search</h2>
<div class="row row-gap">
  <?php for ($x = 0; $x <= 11; $x++) {?>
  <div class="col-sm-4">
      <?php include ("${resURL}components/_emp-card.html");?>
  </div>
  <?php } ?>
</div>

<?php endblock('page')?>
