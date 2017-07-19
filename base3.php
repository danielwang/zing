<!-- ******************
***  Centre landing template ***
******************  -->
<?php
  require_once 'ti.php';
  include_once 'head.php';
  include_once 'partials/header.html';
	include_once 'partials/menu.html';
  ?>
		<section class="content-wrapper">
      <?php startblock('top') ?>
        <div class="template-landing jumbotron text-center sub-pages">
          <h1><?php emptyblock('page-title') ?></h1>
          <p></p>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit pellentesque, tellus id fermentum finibus<br/> Sed turpis risus, efficitur ac augue vitae</p>
          <?php emptyblock('sub-page') ?>
       </div>
      <?php endblock() ?>
      <!-- page body -->
			<section class="container content">
				<?php startblock('page')?>
				<?php endblock()?>
			</section>
		</section>
<?php include 'foot.html';?>
