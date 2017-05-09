<?php include '../../base.php'?>
<?php startblock('page')?>
<div class="page-header">
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
  <h1>Talent Search</h1>
</div>  

<div class="row row-gap">
  <?php for ($x = 0; $x <= 11; $x++) {?>
  <div class="col-sm-4">
      <?php include ("${resURL}components/_app-card.html");?>
  </div>
  <?php } ?>
</div>

<?php endblock('page')?>
