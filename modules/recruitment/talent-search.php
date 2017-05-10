<?php $breadcrumb = true; include '../../base.php' ?>
<?php startblock('page')?>
<div class="page-header">
  <h1>Talent Search</h1>
</div>

<div class="row row-gap">
  <?php for ($x = 0; $x <= 11; $x++) {?>
  <div class="col-sm-4">
      <?php include ("${resURL}components/_app-card.html");?>
  </div>
  <?php } ?>
</div>

<?php endblock('page')?>
