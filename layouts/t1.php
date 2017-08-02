<?php include '../base1.php' ?>
<?php startblock('page-title') ?>
<h1>Template 1 - Page Title</h1>
<h4 class="tag-line">Tagline - Etiam porta sem malesuada magna mollis euismod.</h4>
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
<?php startblock('page-body');?>
<div class="row row-gap">
    <div class="col-sm-8">
        <img class="img-responsive" src="http://placehold.it/780x1800/ABE0F4/57C0E9?text=main" alt="">
    </div>

    <div class="col-sm-4">
        <img class="img-responsive" src="http://placehold.it/390x500/ABE0F4/57C0E9?text=aside" alt="">
    </div>
</div>

<div id="demo" class="pu-box">
  <p>Optional components on this template</p>
  <?php $options = array(array("Tag line", "tag-line"), array("Page action", "page-action"), array("Sub Pages", "sub-page"), array("Footer", "main-footer"), array("Subnav", "subnav"));
  for ($r = 0; $r < count($options); $r++) {
    echo '<p class="pu-toggle-btn pu-toggle-btn-orange"> <label for="' . $options[$r][1] . '"> <input id="' . $options[$r][1] . '"
  type="checkbox" value="' . $options[$r][1] . '" unchecked /><span>' . $options[$r][0] . '</span> </label> </p>';
  } ?>

</div>
<?php endblock()?>
