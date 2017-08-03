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
<div id="layout1" class="layout">
  <img class="img-responsive" src="http://placehold.it/1170x900/C9CACB/939597?text=main+only" alt="">
</div>
<div id="layout2" class="layout row row-gap hidden">
  <div class="col col-sm-4">
    <img class="img-responsive" src="http://placehold.it/390x500/C9CACB/939597?text=sidebar" alt="">
  </div>
  <div class="col col-sm-8">
    <img class="img-responsive" src="http://placehold.it/780x1200/C9CACB/939597?text=main" alt="">
  </div>

</div>

<div id="layout3" class="layout row row-gap hidden">
  <div class="col col-sm-8">
    <img class="img-responsive" src="http://placehold.it/780x1200/C9CACB/939597?text=main" alt="">
  </div>

  <div class="col col-sm-4">
    <img class="img-responsive" src="http://placehold.it/390x500/C9CACB/939597?text=aside" alt="">
  </div>
</div>
<div id="layout4" class="layout row row-gap hidden">
  <div class="col col-sm-4">
    <img class="img-responsive" src="http://placehold.it/390x800/C9CACB/939597?text=column" alt="">
  </div>
  <div class="col col-sm-4">
    <img class="img-responsive" src="http://placehold.it/390x800/C9CACB/939597?text=column" alt="">
  </div>
  <div class="col col-sm-4">
    <img class="img-responsive" src="http://placehold.it/390x800/C9CACB/939597?text=column" alt="">
  </div>
</div>

<div id="demo" class="pu-box">
  <p>Optional components on this template</p>
  <?php $options = array(array("Tag line", "tag-line"), array("Page action", "page-action"), array("Sub Pages", "sub-page"), array("Subnav", "subnav"), array("Footer", "main-footer"));
  for ($r = 0; $r < count($options); $r++) {
    echo '<p class="pu-toggle-btn pu-toggle-btn-orange"> <label for="' . $options[$r][1] . '"> <input id="' . $options[$r][1] . '"
  type="checkbox" value="' . $options[$r][1] . '" unchecked /><span>' . $options[$r][0] . '</span> </label> </p>';
  } ?>
  <hr>
  <p>Content layouts:</p>
  <div class="radio radio-warning">
    <input type="radio" name="layout" value="layout1" id="lt1" checked>
    <label for="lt1">Main Only</label>
  </div>
  <div class="radio radio-warning">
    <input type="radio" name="layout" value="layout2" id="lt2">
    <label for="lt2">Sidebar + Main</label>
  </div>
  <div class="radio radio-warning">
    <input type="radio" name="layout" value="layout3" id="lt3">
    <label for="lt3">Main + aside</label>
  </div>
  <div class="radio radio-warning">
    <input type="radio" name="layout" value="layout4" id="lt4">
    <label for="lt4">Three columns</label>
  </div>
</div>
<?php endblock()?>

<script>
$("input[name='layout']").on('change', function() {
   $layout = $('input[name=layout]:checked').val();
   console.log($layout);
   $('.layout').addClass('hidden');
   $('#' + $layout).removeClass('hidden');

});
</script>
