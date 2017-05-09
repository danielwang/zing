<?php include '../../base.php'?>
<?php startblock('page')?>
<h1>Learning Library</h1>
<div id="learning" class="row row-gap">
  <?php for ($x = 0; $x <= 11; $x++) {?>
  <div class="col-sm-4">
      <?php include ("${resURL}components/_learning-card.html");?>
  </div>
  <?php } ?>
</div>
<?php endblock('page')?>
