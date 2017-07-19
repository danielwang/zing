<?php include '../../base3.php' ?>

<?php startblock('page-title') ?>
  Welcome Daniel Wang!
<?php endblock() ?>
<?php startblock('sub-page') ?>
<ul class="nav nav-pills">
  <li class="active"><a href="#"> <i class="pu-icon pu-icon-home"></i> Home</a></li>
  <li><a href="applicants"><i class="pu-icon pu-icon-profile"></i>  Profile</a></li>
  <li><a href="#"><i class="pu-icon pu-icon-resume"></i> Resume</a></li>
  <li><a href="#"><i class="pu-icon pu-icon-person"></i>  Account</li>
</ul>
<?php endblock() ?>
<?php startblock('page') ?>
<h2>Submitted Applications</h2>
<div class="row">
  <div class="col-sm-4">
    <article class="pu-card">
        <header class="pu-card-header">
          <p class="gray">
              <small>
                  <i class="fa fa-clock-o" aria-hitden="true"></i>
                  Submitted 29 March 2017 at 9:24pm AEST</small>
          </p>
            <h4>
                <a href="#_">Business Development Executive</a>
            </h4>
            <p>
                <small>
                    <i class="fa fa-map-marker" aria-hitden="true"></i>
                    Melbourne, Australia</small>
            </p>
            <p>
                        <button class="btn btn-xs btn-outline btn-primary" type="button">Update</button>
                        <button class="btn btn-xs btn-outline btn-danger" type="button">Withdraw</button>
                    </p>
        </header>
    </article>
  </div>
</div>
