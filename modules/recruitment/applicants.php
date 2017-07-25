<?php include '../../base1.php' ?>
<?php startblock('page-title') ?>
<h2>Senior Technology Specialist - Networks</h2>
<h6>Job ID: #1234567890</h6>
<?php endblock() ?>
<?php startblock('page-action') ?>
<ul class="nav navbar-nav navbar-right">
  <li>
    <a class="text-center" href="#_">
      <i class="pu-icon pu-icon-2x pu-icon-printer"></i>
      <h6>Print</h6>
    </a>
  </li>
  <li>
    <a class="text-center" href="#_">
      <i class="pu-icon pu-icon-2x pu-icon-history"></i>
      <h6>History</h6>
    </a>
  </li>
  <li>
    <a class="text-center" href="#_">
      <i class="pu-icon pu-icon-2x pu-icon-info"></i>
      <h6>Help</h6>
    </a>
  </li>
</ul>
<?php endblock() ?>
<?php startblock('sub-page') ?>
<ul class="nav nav-pills">
  <li><a href="job">Position</a></li>
  <li class="active"><a href="#">Applicants <span class="badge">93</span></a></li>
  <li><a href="sourcing-card">Sourcing <span class="badge">3</span></a></li>
  <li><a href="./">Notes <span class="badge">8</span></a></li>
  <li><a href="#">Documents <span class="badge">2</span></a></li>
</ul>
<?php endblock() ?>
<?php startblock('page-body') ?>
  <?php include ("${resURL}components/_table-people.html");?>
<?php endblock() ?>
<?php emptyblock('footer') ?>
