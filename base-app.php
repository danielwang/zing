<?php
  require_once 'ti.php';
  include_once 'head.php';
  ?>
  <nav class="navbar navbar-default" style="margin:0">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="index"><img src="http://styleguide.pageuppeople.com/images/pu-logo.png" width="80"></a>
        </div>
      </div>
  </nav>
		<div class="content-wrapper" style="margin-left:0 !important">
      <!-- page body -->
			<div class="container content">
				<?php startblock('page')?>
				<?php endblock()?>
			</div>
		</div>

<?php include 'foot.html';?>
