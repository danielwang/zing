<?php include '../base2.php';?>
<?php startblock('top') ?>
    <ol class="breadcrumb">
      <li>
        <a href="#">
          <i class="pu-icon pu-icon-home"></i>
        </a>
      </li>
      <li>
        <a href="#">level 1</a>
      </li>
      <li class="dropdown">
        <a href="#">Level 2
          <b class="caret"></b>
        </a>
        <ul class="dropdown-menu">
          <li>
            <a href="#">Level 2 sibling 1</a>
          </li>
          <li>
            <a href="#">Level 2 sibling 2</a>
          </li>
          <li>
            <a href="#">Level 2 sibling 3</a>
          </li>
        </ul>
      </li>
      <li class="active">current level</li>
    </ol>
<?php endblock()?>
<?php startblock('page-title') ?>
Template 5 - Page Title
<?php endblock()?>
<?php startblock('page-body');?>
<div class="row">
	<div class="col-sm-2">
    <nav class="sidenav">
      <ul class="nav" data-spy="affix" data-offset-top="10">
        <?php for ($x = 1; $x <= 10; $x++) {?>
          <li>
            <a href="#section<?php echo($x) ?>">Section <?php echo($x) ?></a>
          </li>
        <?php } ?>
      </ul>
    </nav>
	</div>
  <div class="col-sm-10">
      <div  class="pu-box">
          <?php for ($x = 1; $x <= 10; $x++) {?>
            <section id="section<?php echo($x) ?>">
              <h3><a href="#"> Section <?php echo($x) ?> </a></h3>
              <article>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nec imperdiet turpis. Curabitur aliquet pulvinar ultrices. Etiam at posuere leo. Proin ultrices ex et dapibus feugiat
                  <a href="#">link example</a>
                  aenean purus leo, faucibus at elit vel, aliquet scelerisque dui. Etiam quis elit euismod, imperdiet augue sit amet, imperdiet odio. Aenean sem erat, hendrerit eu gravida id, dignissim ut ante. Nam consequat porttitor libero euismod congue.
                </p>
                <p>Nunc lorem augue, luctus nec auctor sit amet, luctus efficitur felis. Proin eleifend efficitur commodo. Vestibulum fermentum bibendum lorem at sagittis. Donec sit amet odio eget turpis ultricies tempor quis sed enim. Praesent consectetur non felis ac aliquam. Etiam nec aliquet lorem. Sed quis ullamcorper metus, in elementum elit. Curabitur varius condimentum eros, vitae viverra tortor tristique nec. In varius pulvinar commodo. Nullam at molestie est, vel sodales nisl. Morbi nec quam suscipit, sollicitudin felis et, placerat quam. Integer vel sodales ex.</p>
              </article>
            </section>
          <?php } ?>
      </div>
  </div>
</div>
<?php endblock()?>
