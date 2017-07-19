<?php include '../../base1.php' ?>
<?php startblock('page-title') ?>
<h1>My Contribution and Career Plan</h1>
<h4>Daniel Wang</h4>
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
      <i class="pu-icon pu-icon-2x pu-icon-printer"></i>
      <h6>Print</h6>
    </a>
  </li>
  <li>
    <a class="text-center" href="#_">
      <i class="fa fa-2x fa-calendar-check-o"></i>
      <h6>Process</h6>
    </a>
  </li>
</ul>
<?php endblock() ?>
<?php startblock('page')?>
<div id="performance">
  <div class="row row-gap">
    <div class="col-sm-3">
        <ul class="sidenav affix" data-spy="affix" data-offset-top="150">
          <li><a href="#">Start</a></li>
          <li class="active">
            <a href="#">My Contribution</a>
          </li>
          <li><a href="#">Career plan</a></li>
          <li><a href="#">Next Step</a></li>
        </ul>
    </div>
    <div class="col-sm-9">
         <?php include ("${resURL}components/_item.php");?>
    </div>
  </div>
</div>
<?php endblock()?>

<?php emptyblock('footer') ?>
