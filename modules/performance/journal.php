<?php include '../../base1.php' ?>

<?php startblock('page-title') ?>
<h1><i class="pu-icon pu-icon-journal"></i> Journal</h1>
<?php endblock() ?>
<?php startblock('page-action') ?>
<ul class="nav navbar-nav navbar-right">
  <li>
    <a class="text-center" href="#_">
      <i class="pu-icon pu-icon-2x pu-icon-performance"></i>
      <h6>App</h6>
    </a>
  </li>
  <li>
    <a class="text-center" href="#_">
      <i class="pu-icon pu-icon-2x pu-icon-feedback"></i>
      <h6>Feedback</h6>
    </a>
  </li>
  <li>
    <a class="text-center" href="#_">
      <i class="fa fa-2x fa-envelope"></i>
      <h6>Email</h6>
    </a>
  </li>
</ul>
<?php endblock() ?>

<?php startblock('page-body')?>
<div class="row row-gap">
  <?php for ($x = 0; $x <= 11; $x++) {?>
  <div class="col-sm-4">
      <?php include ("${resURL}components/_journal-card.html");?>
  </div>
  <?php } ?>
</div>
<?php endblock()?>
