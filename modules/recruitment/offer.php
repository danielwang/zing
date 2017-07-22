<?php include '../../base1.php'; ?>
<?php startblock('page-title') ?>
<h1>Offer Details - James Bond</h1>
<h4><i class="pu-icon pu-icon-job"></i> Senior Technology Specialist - Networks</h4>
<?php endblock() ?>
<?php startblock('page-action') ?>
<ul class="nav navbar-nav navbar-right">
  <li>
    <a class="text-center" href="#_">
      <i class="pu-icon pu-icon-2x pu-icon-printer"></i>
      <h6>Print</h6>
    </a>
  </li>
  <li>
    <a class="text-center" href="#_">
      <i class="pu-icon pu-icon-2x pu-icon-history"></i>
      <h6>History</h6>
    </a>
  </li>
  <li>
    <a class="text-center" href="#_">
      <i class="pu-icon pu-icon-2x pu-icon-info"></i>
      <h6>Help</h6>
    </a>
  </li>
</ul>
<?php endblock() ?>


<?php startblock('page-body') ?>
<div class="row row-gap">
  <div class="col-sm-4">
    <div class="list-group">
        <a href="#" class="list-group-item">Offer details
        </a>
        <a href="#" class="list-group-item">Employee referrals
        </a>
        <a href="#" class="list-group-item">Offer documents </a>
        <a href="#" class="list-group-item">Approval process</a>
        <a href="#" class="list-group-item">Provisioning</a>
      </div>
  </div>
  <div class="col-sm-8">
    <?php include ("${resURL}components/_accordion-offer.html");?>
  </div>
</div>
<?php endblock() ?>
