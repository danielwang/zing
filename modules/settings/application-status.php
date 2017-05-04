<?php include '../../base.php';?>
<?php startblock('page')?>
<ol class="breadcrumb">
    <li>
        <a href="#">
            <i class="pu-icon pu-icon-settings"></i>
            System Settings</a>
    </li>
    <li>
      <a href="#">Jobs</a>
    </li>
    <li>
        <a href="#">Recruitment Processes</a>
    </li>
    <li>
        <a href="#">Graduate</a>
    </li>
    <li class="active">Application statuses</li>
</ol>

<div class="row">
  <div class="col-sm-8 col-sm-offset-2">
    <?php include ("${resURL}components/_table.html");?>
  </div>
</div>
<?php endblock()?>
