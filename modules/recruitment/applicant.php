<?php include '../../base.php' ?>
<?php startblock('page') ?>
<div class="page-header">
  <h1>John Smith</h1>
</div>
<div class="row row-gap">
  <div class="col-sm-4">
    <article class="pu-box" role="box">
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
  </div>
  <div class="col-sm-8">
    <ul class="nav nav-tabs nav-justified pu-tab">
      <li class="active">
        <a href="#1b" data-toggle="tab">Applications</a>
      </li>
      <li>
        <a href="#2b" data-toggle="tab">History</a>
      </li>
      <li>
        <a href="#3b" data-toggle="tab">Resume</a>
      </li>
    </ul>
    <div class="tab-content clearfix">
      <div class="tab-pane active" id="1b">
        <p>Mihi quidem Homerus huius modi quiddam Lorem ipsum dolor sit amet, consectetur adipiscing elit. De illis, cum volemus. Inquit, dasne adolescenti
        </p>
      </div>
      <div class="tab-pane" id="2b">
        <?php include ("${resURL}components/_timeline.html");?>
      </div>
      <div class="tab-pane" id="3b">
        <p>Mihi quidem Homerus huius modi quiddam Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
    </div>
  </div>
</div>
<?php endblock() ?>