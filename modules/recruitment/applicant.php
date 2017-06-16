<?php include '../../base.php' ?>

<?php startblock('jumbotron') ?>
  <div class="jumbotron">
    <div class="container">
      <h1>John Smith</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
      <p><a class="btn btn-primary btn-lg" href="#" role="button">Action</a></p>
    </div>
  </div>
<?php endblock() ?>
<?php startblock('submenu') ?>
  <?php $breadcrumb = true; include ("${resURL}partials/submenu.html"); ?>
<?php endblock() ?>
<?php startblock('page') ?>
<div class="container">
  <div class="row row-gap">
  <div class="col-sm-8">
    <article class="pu-box" role="box" style="margin-top: -100px">
      <header class="pu-box-header" role="box-header">
        <h4>Profile</h4>
      </header>
      <div class="pu-box-content">
        <strong><i class="fa fa-book"></i> Education</strong>

        <p class="text-muted">
          B.S. in Computer Science from the University of Tennessee at Knoxville
        </p>

        <hr>

        <strong><i class="fa fa-map-marker"></i> Location</strong>

        <p class="text-muted">Malibu, California</p>

        <hr>

        <strong><i class="fa fa-pencil"></i> Skills</strong>

        <p>
          <span class="pu-tag pu-tag-red">UI Design</span>
          <span class="pu-tag pu-tag-green">Coding</span>
          <span class="pu-tag pu-tag-blue">Javascript</span>
          <span class="pu-tag pu-tag-orange">PHP</span>
          <span class="pu-tag pu-tag-purple">Node.js</span>
        </p>

        <hr>

        <strong><i class="fa fa-file-text-o margin-r-5"></i> Notes</strong>

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
      </div>
    </article>
    <ul class="nav nav-tabs nav-justified pu-tab">
      <li class="active">
        <a href="#1b" data-toggle="tab">Applications</a>
      </li>
      <li>
        <a href="#2b" data-toggle="tab">CRM</a>
      </li>
      <li>
        <a href="#3b" data-toggle="tab">Resume</a>
      </li>
    </ul>
    <div class="tab-content clearfix">
      <div class="tab-pane active" id="1b">
        <p>Mihi quidem Homerus huius modi quiddam Lorem ipsum dolor sit amet, consectetur adipiscing elit. De illis, cum volemus. Inquit, dasne adolescenti
        </p>
        <p>Mihi quidem Homerus huius modi quiddam Lorem ipsum dolor sit amet, consectetur adipiscing elit. De illis, cum volemus. Inquit, dasne adolescenti
        </p>
        <p>Mihi quidem Homerus huius modi quiddam Lorem ipsum dolor sit amet, consectetur adipiscing elit. De illis, cum volemus. Inquit, dasne adolescenti
        </p>
        <p>Mihi quidem Homerus huius modi quiddam Lorem ipsum dolor sit amet, consectetur adipiscing elit. De illis, cum volemus. Inquit, dasne adolescenti
        </p>
      </div>
      <div class="tab-pane" id="2b">
          Inquit, dasne adolescenti
      </div>
      <div class="tab-pane" id="3b">
        <p>Mihi quidem Homerus huius modi quiddam Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <h4>History</h4>
    <?php include ("${resURL}components/_timeline.html");?>
  </div>
</div>
</div>
<?php endblock() ?>
