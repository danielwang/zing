<?php include '../../base.php'?>
<?php startblock('page')?>
<h1>Reports</h1>
<div class="row row-gap">
  <?php for ($x = 0; $x <= 11; $x++) {?>
  <div class="col-sm-4">
      <?php include ("${resURL}components/_box.html");?>
  </div>
  <?php } ?>
</div>
<?php endblock()?>
