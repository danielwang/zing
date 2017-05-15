<?php $breadcrumb = false; $jumbotron = true; include '../../base.php' ?>
<?php startblock('page') ?>
<div class="jumbotron">
  <div class="container">
    <h1>Human Resources Officer</h1>
    <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
    <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more »</a></p>
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
