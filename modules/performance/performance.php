<?php include '../../base1.php' ?>
<?php startblock('page-title') ?>
<h1>My Contribution and Career Plan</h1>
<h4>Daniel Wang</h4>
<?php endblock() ?>
<?php startblock('page')?>
<div id="performance">
  <div class="row row-gap">
    <div class="col-sm-3">
        <ul class="sidenav affix" data-spy="affix" data-offset-top="150">
          <li><a href="#">Start</a></li>
          <li class="active">
            <a href="#">My Contribution</a>
          </li>
          <li><a href="#">Career plan</a></li>
          <li><a href="#">Next Step</a></li>
        </ul>
    </div>
    <div class="col-sm-9">
         <?php include ("${resURL}components/_item.php");?>
    </div>
  </div>
</div>
<?php endblock()?>
