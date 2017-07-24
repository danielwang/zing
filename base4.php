<!-- ******************
***  T4 page template ***
******************  -->
<?php
  require_once 'ti.php';
  include_once 'head.php';
  include_once 'partials/header.html';
	include_once 'partials/menu.html';
  ?>
		<section class="content-wrapper">
      <!-- submenu -->
      <?php startblock('submenu') ?>
      <nav class="subnav">
        <div class="container">
          <div class="row">
            <div class="col-sm-8">
              <?php startblock('breadcrumb') ?>
                  <?php include ("${resURL}components/_breadcrumb.html");?>
              <?php endblock() ?>
            </div>
            <div class="col-sm-4 text-right">
            </div>
          </div>
        </div>
      </nav>
      <?php endblock() ?>
      <!-- page body -->
			<section class="container content">
        <h1><?php emptyblock('page-title') ?></h1>
				<?php startblock('page-body')?>
				<?php endblock()?>
			</section>
		</section>
<?php include 'foot.html';?>
