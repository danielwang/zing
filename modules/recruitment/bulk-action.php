<?php $breadcrumb = false; include '../../base.php' ?>
<?php startblock('page') ?>
<div class="page-header">
  <h1>Bulk action</h1>
</div>
<div class="row row-gap">
  <div class="col-sm-12">
  <?php include ("${resURL}components/_wizard.html"); ?>
</div>
<div class="row row-gap">
  <div class="col-sm-8 col-sm-offset-2">
    <div class="panel">
           <div class="panel-heading">
               <h4 class="panel-title">Select the documents you would like to include</h4>
           </div>
           <div class="panel-body">
             <?php include ("${resURL}components/_checklist.html"); ?>
        </div>
      </div>
  </div>
</div>
<?php endblock() ?>
