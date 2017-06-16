<?php $breadcrumb = false; $jumbotron = true; include '../../base.php' ?>
<?php startblock('page') ?>
<div class="jumbotron hero">
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-md-8 col-lg-9">
        <h1>Senior graphic designer</h1>
        <h4>Job ID: #1234567890</h4>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3">
        <ul class="nav navbar-nav navbar-right">
          <li>
            <a class="text-center" href="#">
              <i class="fa fa-print fa-lg"></i>
              <h6>Print</h6>
            </a>
          </li>
          <li>
            <a class="text-center" href="#">
              <i class="fa fa-comments-o fa-lg"></i>
              <h6>Feedback</h6>
            </a>
          </li>
          <li>
            <a class="text-center" href="#">
              <i class="fa fa-info-circle fa-lg"></i>
              <h6>Help</h6>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div class="container content">
  <?php include ("${resURL}components/_wizard.html"); ?>
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
        <?php include ("${resURL}components/_tabs.html"); ?>
    </div>
  </div>
</div>
<?php endblock() ?>
