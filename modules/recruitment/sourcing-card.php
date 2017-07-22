<?php include '../../base1.php' ?>
<?php startblock('page-title') ?>
<h2><i class="pu-icon pu-icon-job"></i> Senior Technology Specialist - Networks</h2>
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
  <li><a href="applicants">Applicants <span class="badge">93</span></a></li>
  <li class="active"><a href="#">Sourcing <span class="badge">3</span></a></li>
  <li><a href="#">Notes <span class="badge">8</span></a></li>
  <li><a href="#">Documents <span class="badge">2</span></a></li>
</ul>
<?php endblock() ?>
<?php emptyblock('submenu') ?>
<?php startblock('page-body') ?>
<div class="row">
  <div class="col-sm-3"> <!-- required for floating -->
    <div class="list-group">
      <a href="#" class="list-group-item">
        Career website
      </a>
      <a href="#" class="list-group-item active">Seek</a>
      <a href="#" class="list-group-item">Intranet</a>
      <a href="#" class="list-group-item">Job Bank</a>
      <a href="#" class="list-group-item">Career One</a>
      <a href="#" class="list-group-item">Job Street</a>
    </div>
    <a href="#" >Get more job boards</a>
 </div>
 <div class="col-sm-9">
   <div class="pu-box">
      <?php include ("${resURL}components/sourcing.html");?>
   </div>
 </div>
</div>
<?php endblock() ?>
