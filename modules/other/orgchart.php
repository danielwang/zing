<?php include '../../base3a.php' ?>
<?php startblock('page-title') ?>
  Welcome to Employee Services!
<?php endblock() ?>
<?php emptyblock('search') ?>
<?php startblock('sub-page') ?>
<ul class="nav nav-pills">
  <li><a href="dock"> Me</a></li>
  <li class="active"><a href="orgchart">My Team</a></li>
</ul>
<?php endblock() ?>

<?php startblock('page-body')?>
  <div class="row">
    <div class="col-sm-6 col-sm-offset-3">
      <?php include ("${resURL}components/_orgchart.html");?>
    </div>
  </div>
<?php endblock()?>
<?php emptyblock('submenu') ?>
