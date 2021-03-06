<!-- ******************
***  T3 b Search landing template ***
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
          <?php startblock('search') ?>
          <section id="search" class="search-lg">
            <label for="search-input"><i class="fa fa-search" aria-hidden="true"></i><span class="sr-only">Search icons</span></label>
            <input id="search-input" class="form-control input-lg" placeholder="Search ..." autocomplete="off" spellcheck="false" autocorrect="off" tabindex="1">
            <span id="search-refine" href="#" class="fa fa-sliders" aria-hidden="true"></span>
          </section>
          <p><a href="#">item</a> <a href="#">item</a> <a href="#">item</a></p>
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
