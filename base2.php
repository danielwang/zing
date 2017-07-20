<!-- ******************
***  T2 data list template ***
******************  -->
<?php
  require_once 'ti.php';
  include_once 'head.php';
  include_once 'partials/header.html';
	include_once 'partials/menu.html';
  ?>
		<section class="content-wrapper tpl-datalist">
      <!-- submenu -->
      <?php startblock('submenu') ?>
      <nav class="subnav">
        <div class="container">
          <div class="row">
            <div class="col-sm-6">
              <section id="search">
                <label for="search-input"><i class="fa fa-search" aria-hidden="true"></i><span class="sr-only">Search icons</span></label>
                <input id="search-input" class="form-control input-lg" placeholder="Search ..." autocomplete="off" spellcheck="false" autocorrect="off" tabindex="1">
                <span id="search-refine" href="#" class="fa fa-sliders" aria-hidden="true"></span>
              </section>
            </div>
            <div class="col-sm-6 text-right">
              <button type="button" class="btn btn-primary">
              <i class="fa fa-plus-circle"></i> New</button>
            </div>
          </div>
        </div>
      </nav>
      <?php endblock() ?>
      <!-- page body -->
			<section class="container content">
        <h1><?php emptyblock('page-title') ?></h1>
				<?php startblock('page')?>
				<?php endblock()?>
			</section>
		</section>
<?php include 'foot.html';?>
