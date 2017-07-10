<?php
  require_once 'ti.php';
  include_once 'head.php';
  include_once 'partials/header.html';
	include_once 'partials/menu.html';
  ?>
		<section class="content-wrapper">
      <!-- submenu -->
      <?php startblock('top') ?>
        <?php include ("${resURL}partials/submenu.html"); ?>
      <?php endblock()?>
      <!-- page body -->
			<section class="container content">
				<?php startblock('page')?>
				<?php endblock()?>
			</section>
		</section>
<?php include 'foot.html';?>
