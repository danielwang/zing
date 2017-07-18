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
  <li class="active"><a href="#">Position</a></li>
  <li><a href="#">Applicants <span class="badge">93</span></a></li>
  <li><a href="#">Sourcing <span class="badge">3</span></a></li>
  <li><a href="./">Notes <span class="badge">8</span></a></li>
  <li><a href="#">Documents <span class="badge">2</span></a></li>
</ul>
<?php endblock() ?>
<?php startblock('page') ?>
  <div class="row row-gap">
    <div class="col-sm-8">
      <div class="pu-panel panel">
             <div class="panel-heading">
                 <h4 class="panel-title">Position info</h4>
             </div>
             <div class="panel-body">
            <?php include ("${resURL}components/_form.html"); ?>
          </div>
        </div>
    </div>
    <div class="col-sm-4">
    <div class="pu-box">
        <h3 class="panel-title"><i class="fa fa-magic"></i> Additional info </h3>

        <h6>Title</h6>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. De illis, cum volemus. Inquit, dasne adolescenti veniam? Mihi quidem Homerus huius modi quiddam Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <h6>Title</h6>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. De illis, cum volemus. Inquit, dasne adolescenti veniam? Mihi quidem Homerus huius modi quiddam Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </div>
  </div>
<?php endblock() ?>
