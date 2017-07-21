<?php include '../base1.php' ?>
<?php startblock('page-title') ?>
<h1>Template 1 - Page Title</h1>
<h4>Tagline - Etiam porta sem malesuada magna mollis euismod.</h4>
<?php endblock() ?>

<?php startblock('page-action') ?>
<ul class="nav navbar-nav navbar-right">
  <li>
    <a class="text-center" href="#_">
      <i class="pu-icon pu-icon-2x pu-icon-leaf"></i>
      <h6>Icon 1</h6>
    </a>
  </li>
  <li>
    <a class="text-center" href="#_">
      <i class="pu-icon pu-icon-2x pu-icon-leaf"></i>
      <h6>Icon 2</h6>
    </a>
  </li>
  <li>
    <a class="text-center" href="#_">
      <i class="pu-icon pu-icon-2x pu-icon-leaf"></i>
      <h6>Icon 3</h6>
    </a>
  </li>
</ul>
<?php endblock() ?>
<?php startblock('sub-page') ?>
<ul class="nav nav-pills">
  <li class="active"><a href="#">Sub page 1</a></li>
  <li><a href="#">Sub page 2</a></li>
  <li><a href="#">Sub page 3</a></li>
  <li><a href="#">Sub page 4</a></li>
</ul>
<?php endblock() ?>
<?php startblock('page');?>
<div class="row row-gap">
    <div class="col-sm-8">
        <img class="img-responsive" src="http://placehold.it/780x800/ABE0F4/57C0E9?text=main" alt="">
    </div>

    <div class="col-sm-4">
        <img class="img-responsive" src="http://placehold.it/390x500/ABE0F4/57C0E9?text=aside" alt="">
    </div>

</div>
<?php endblock()?>
