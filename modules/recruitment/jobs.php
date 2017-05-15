<?php $breadcrumb = true; $jumbotron=false; include '../../base.php';?>
<?php startblock('page')?>
<div class="page-header">
  <h1>Jobs</h1>
</div>
<div class="row">
  <div class="col-sm-12">
    <?php include ("${resURL}components/_table-jobs.html");?>
  </div>
</div>
<?php endblock()?>
