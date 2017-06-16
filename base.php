<?php
  require_once 'ti.php';
  include_once 'head.php';
  include_once 'partials/header.html';
	include_once 'partials/menu.html';
  ?>
		<div class="content-wrapper">
      <!-- jumbotron -->
      <?php startblock('jumbotron') ?>
      <?php endblock() ?>
      <!-- jumbotron -->

			<div class="container content">
        <?php startblock('submenu') ?>
        <?php endblock() ?>

				<?php startblock('page')?>
				<?php endblock()?>
			</div>
		</div>

<?php // include 'partials/footer.html';?>
<?php include 'foot.html';?>
