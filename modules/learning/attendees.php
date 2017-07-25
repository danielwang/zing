<?php include '../../base1.php' ?>
<?php startblock('page-title') ?>
<h1>Learning Activity 101</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
<?php endblock() ?>
<?php startblock('sub-page') ?>
<ul class="nav nav-pills">
  <li><a href="activity">Details</a></li>
  <li class="active"><a href="#">Attendees</a></li>
</ul>
<?php endblock() ?>

<?php startblock('page-action') ?>
<ul class="nav navbar-nav navbar-right">
  <li>
    <a class="text-center" href="#_">
      <i class="pu-icon pu-icon-2x pu-icon-share"></i>
      <h6>Share</h6>
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
      <i class="pu-icon pu-icon-2x pu-icon-printer"></i>
      <h6>Print</h6>
    </a>
  </li>
</ul>
<?php endblock() ?>

<?php emptyblock('submenu') ?>
<?php emptyblock('footer') ?>

<?php startblock('page-body')?>
    <?php include ("${resURL}components/_table.html");?>
<?php endblock()?>
