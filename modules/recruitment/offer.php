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
    <div class="sidenav">
      <ul class="nav affix" data-spy="affix" data-offset-top="80">
       <li>
         <a href="#">Personal details</a>
       </li>
       <li>
         <a href="#">Job details</a>
       </li>
       <li>
         <a href="#">Position type</a>
       </li>
       <li>
         <a href="#">Offer details</a>
       </li>
       <li>
         <a href="#">Rates calculator</a>
       </li>
       <li>
         <a href="#">Employee referrals</a>
       </li>
       <li>
         <a href="#">Offer documents</a>
       </li>
       <li>
         <a href="#">Offer Check</a>
       </li>
      </ul>
    </div>
  </div>
  <div class="col-sm-8">
    <?php include ("${resURL}components/_accordion-offer.html");?>
  </div>
</div>
<?php endblock() ?>
