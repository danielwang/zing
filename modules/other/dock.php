<?php include '../../base3a.php' ?>
<?php startblock('page-title') ?>
  Welcome to Employee Services!
<?php endblock() ?>
<?php emptyblock('search') ?>
<?php startblock('sub-page') ?>
<ul class="nav nav-pills">
  <li class="active"><a href="#"> Me</a></li>
  <li><a href="orgchart">My Team</a></li>
</ul>
<?php endblock() ?>
<?php startblock('page-body')?>
<h3>Recent activities</h3>
<div class="row">

  <div class="col-sm-3">
    <div class="pu-box text-center">
      <img class="pu-avatar" src="../../img/avatar/users-1.svg">
      <h4><a href="#">
        Performance Review
      </a></h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nec imperdiet turpis.</p>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="pu-box text-center">
      <i class="pu-icon pu-icon-3x pu-icon-job gray"></i>
      <h4><a href="level-3.html">
        Software developer
      </a></h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nec imperdiet turpis.</p>
    </div>
  </div>
  <div class="col-sm-3">
    <article class="pu-card">
        <header class="pu-card-header">
            <aside class="pu-card-header-aside">
                <img class="thumbnail" width="100" src="../../img/image.jpg" alt="">
            </aside>
            <main class="pu-card-header-main">
                <h4>
                    <a href="#_">Card one</a>
                </h4>
                <p>
                    <span class="label label-warning">Online learning
                    </span>
                </p>
            </main>
        </header>
        <footer class="pu-card-footer">
            Consectetur adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet ...
        </footer>
    </article>
  </div>
  <div class="col-sm-3">
    <div class="pu-box text-center">
      <img class="pu-avatar" src="../../img/avatar/users-2.svg">
      <h4><a href="#">
        Succession
      </a></h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nec imperdiet turpis.</p>
    </div>
  </div>
</div>
<h3>About Me</h3>
<div class="row">
  <div class="col-sm-3">
    <div class="pu-box text-center">
      <i class="pu-icon pu-icon-3x pu-icon-recruitment blue"></i>
      <h4><a href="level-3.html">
        Recruitment
      </a></h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nec imperdiet turpis.</p>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="pu-box text-center">
      <i class="pu-icon pu-icon-3x pu-icon-performance green"></i>
      <h4><a href="#">
        Performance
      </a></h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nec imperdiet turpis.</p>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="pu-box text-center">
      <i class="pu-icon pu-icon-3x pu-icon-learning orange"></i>
      <h4><a href="#">
        Learning
      </a></h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nec imperdiet turpis.</p>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="pu-box text-center">
      <i class="pu-icon pu-icon-3x pu-icon-org-chart red"></i>
      <h4><a href="#">
        Succession
      </a></h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nec imperdiet turpis.</p>
    </div>
  </div>
</div>

<h3>More Info</h3>
<div class="row">
  <div class="col-sm-3">
    <?php include ("${resURL}components/widgets/profile.html");?>
  </div>
  <div class="col-sm-3">
    <?php include ("${resURL}components/widgets/jobs.html");?>
  </div>
</div>
<?php endblock('page-body')?>
