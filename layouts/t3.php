<?php include '../base3.php' ?>
<?php startblock('page-title') ?>
  Template 3 - Landing page
<?php endblock() ?>
<?php emptyblock('search') ?>
<?php startblock('sub-page') ?>
<ul class="nav nav-pills">
  <li class="active"><a href="#">Sub page 1</a></li>
  <li><a href="#">Sub page 2</a></li>
  <li><a href="#">Sub page 3</a></li>
  <li><a href="#">Sub page 4</a></li>
</ul>
<?php endblock() ?>
<?php startblock('page-body');?>
<div class="row row-gap">
    <div class="col-sm-12">
        <img class="img-responsive" src="http://placehold.it/1200x800/ABE0F4/57C0E9?text=content" alt="">
    </div>
</div>
<?php endblock()?>
