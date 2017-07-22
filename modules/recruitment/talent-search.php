<?php include '../../base3b.php' ?>

<?php startblock('page-title') ?>
  Talent Search
<?php endblock() ?>

<?php startblock('page-body') ?>
<ul class="nav nav-pills pu-buckets">
      <li class="bucket-green active">
        <a href="#">
          <h3>15</h3>
          <p>Applicants</p>
          <span class="icon">
            <i class="fa fa-bitbucket" aria-hidden="true"></i>
          </span>
        </a>
      </li>
      <li class="bucket-orange">
        <a href="#">
          <h3>8</h3>
          <p>Applicants</p>
          <span class="icon">
            <i class="fa fa-bitbucket" aria-hidden="true"></i>
          </span>
        </a>
      </li>
      <li class="bucket-red">
        <a href="#">
          <h3>23</h3>
          <p>Applicants</p>
          <span class="icon">
            <i class="fa fa-bitbucket" aria-hidden="true"></i>
          </span>
        </a>
      </li>
    </ul>
<div class="row row-gap">
  <?php for ($x = 0; $x <= 11; $x++) {?>
  <div class="col-sm-4">
      <?php include ("${resURL}components/_app-card.html");?>
  </div>
  <?php } ?>
</div>

<?php endblock('page-body')?>
