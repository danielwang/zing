<!-- ******************
*** T1 Detail template ***
******************  -->
<?php
  require_once 'ti.php';
  include_once 'head.php';
  include_once 'partials/header.html';
	include_once 'partials/menu.html';
  ?>
		<section class="content-wrapper tpl-detail">
      <!-- jumbotron -->
      <?php startblock('top') ?>
        <div class="jumbotron">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-md-7 col-lg-9">
              <?php emptyblock('page-title') ?>
            </div>
            <div class="hidden-xs col-sm-6 col-md-5 col-lg-3">
              <?php emptyblock('page-action') ?>
            </div>
          </div>
          <div class="sub-page">
            <?php emptyblock('sub-page') ?>
          </div>
        </div>
      </div>
      <?php endblock() ?>
      <!-- submenu -->
      <?php startblock('submenu') ?>
      <nav class="subnav" data-spy="affix" data-offset-top="220">
        <div class="container">
          <div class="row">
            <div class="col-sm-6">
            </div>
            <div class="col-sm-6 text-right">
              <button type="button" class="btn btn-outline btn-info">
              Action</button>
              <div class="btn-group">
                <button type="button" class="btn btn-white" data-toggle="tooltip" data-placement="bottom" title="Clone">
                  <i class="fa fa-copy fa-lg" aria-hitden="true"></i>
                </button>
                <button type="button" class="btn btn-white" data-toggle="tooltip" data-placement="bottom" title="Delete">
                  <i class="fa fa-trash fa-lg" aria-hitden="true"></i>
                </button>
                <div class="btn-group">
                  <button type="button" class="btn btn-white dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-ellipsis-h fa-lg" aria-hitden="true"></i>
                  </button>
                  <ul class="dropdown-menu dropdown-menu-right">
                    <li>
                      <a href="#">Action 1</a>
                    </li>
                    <li>
                      <a href="#">Action 2</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </nav>
      <?php endblock() ?>
      <!-- page body -->
			<section class="container content">
				<?php startblock('page-body')?>
				<?php endblock()?>
			</section>
		</section>
    <?php startblock('footer') ?>
    <footer class="main-footer">
      <section class="container">
        <div class="row">
          <div class="col-sm-8">
            <button class="btn btn-default">
              Tertiary
            </button>
          </div>
          <div class="col-sm-4 text-right">
            <button class="btn btn-success">
              Secondary
            </button>
            <button class="btn btn-primary">
              Primary
            </button>
          </div>
        </div>
      </section>
    </footer>
    <?php endblock()?>
<?php include 'foot.html';?>
