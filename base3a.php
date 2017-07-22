<!-- ******************
***  T3 a Centre landing template ***
******************  -->
<?php
  require_once 'ti.php';
  include_once 'head.php';
  include_once 'partials/header.html';
	include_once 'partials/menu.html';
  ?>
		<section class="content-wrapper tpl-landing">
      <?php startblock('top') ?>
        <div class="jumbotron">
          <h1><?php emptyblock('page-title') ?></h1>
          <?php startblock('tag-line') ?>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit pellentesque, tellus id fermentum finibus<br/> Sed turpis risus, efficitur ac augue vitae</p>
          <?php endblock()?>
          <div class="sub-page">
            <?php emptyblock('sub-page') ?>
          </div>
       </div>
      <?php endblock() ?>
      <!-- page body -->
			<section class="container content">
				<?php startblock('page-body')?>
				<?php endblock()?>
			</section>
		</section>
<?php include 'foot.html';?>
