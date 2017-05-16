<?php $breadcrumb = null; include '../../base.php'; ?>
<?php startblock('page') ?>
<div class="page-header">
  <h1>Offer Details - John Smith</h1>
</div>
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
