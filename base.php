<?php
  require_once 'ti.php';
  include_once 'head.php';
  include_once 'partials/header.html';
	include_once 'partials/menu.html';
  ?>
		<div class="content-wrapper">
      <!-- jumbotron -->
      <?php startblock('top') ?>
      <div class="jumbotron hero">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-md-7 col-lg-9">
              <?php emptyblock('page-title') ?>
            </div>
            <div class="col-sm-6 col-md-5 col-lg-3">
              <ul class="nav navbar-nav navbar-right">
                <li>
                  <a class="text-center" href="#_">
                    <i class="fa fa-print fa-lg"></i>
                    <h6>Print</h6>
                  </a>
                </li>
                <li>
                  <a class="text-center" href="#_">
                    <i class="fa fa-comments-o fa-lg"></i>
                    <h6>Feedback</h6>
                  </a>
                </li>
                <li>
                  <a class="text-center" href="#_">
                    <i class="fa fa-info-circle fa-lg"></i>
                    <h6>Help</h6>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <?php endblock() ?>
      <!-- submenu -->
      <!-- page body -->
			<div class="container content-wrapper">
				<?php startblock('page')?>
				<?php endblock()?>
			</div>
		</div>

<?php // include 'partials/footer.html';?>
<?php include 'foot.html';?>
