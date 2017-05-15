<?php
  require_once 'ti.php';
  include_once 'head.php';
  include_once 'partials/header.html';
	include_once 'partials/menu.html';
  include_once 'partials/submenu.html';
  ?>
		<div class="content-wrapper">
      <?php if ($jumbotron == true){?>
        <?php startblock('page')?>
				<?php endblock()?>
      <?php } else { ?>
			<div class="container content">
				<?php startblock('page')?>
				<?php endblock()?>
			</div>
     <?php }?>
		</div>

<?php // include 'partials/footer.html';?>
<?php include 'foot.html';?>
