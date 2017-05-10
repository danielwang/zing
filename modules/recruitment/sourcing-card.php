<?php include '../../base.php'; $breadcrumb = true; ?>
<?php startblock('page')?>
<div class="page-header">
  <h1>Sourcing Channels</h1>
</div>
<div class="row">
  <div class="col-sm-3">
    <div class="panel">
        <div class="panel-heading">
            <h4 class="panel-title">Filters</h4>
        </div>
        <div class="panel-body">
            <?php include ("${resURL}components/_filters.html");?>
        </div>
    </div>
  </div>
</div>
<?php endblock()?>
