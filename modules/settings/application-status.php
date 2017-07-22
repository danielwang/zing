<?php include '../../base4.php';?>
<?php startblock('page-title') ?>
Application statuses
<?php endblock()?>
<?php startblock('breadcrumb') ?>
<ol class="breadcrumb">
  <li>
    <a href="#">
      <i class="pu-icon pu-icon-settings"></i>
    </a>
  </li>
  <li>
    <a href="#">Recruitment Processes</a>
  </li>
  <li class="dropdown">
    <a href="#">Graduate
      <b class="caret"></b>
    </a>
    <ul class="dropdown-menu">
      <li>
        <a href="#">General</a>
      </li>
      <li>
        <a href="#">Onboarding</a>
      </li>
      <li>
        <a href="#">Expression of Interest Campaign</a>
      </li>
    </ul>
  </li>
  <li class="active">Application statuses</li>
</ol>
<?php endblock()?>

<?php startblock('page-body')?>
<div class="row">
  <div class="col-sm-8">
    <?php include ("${resURL}components/_table.html");?>
  </div>
</div>
<?php endblock()?>
