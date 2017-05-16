<?php $breadcrumb = true; $jumbotron = true; include '../../base.php' ?>
<?php startblock('page') ?>
<div class="jumbotron hero">
  <div class="container">
    <h1><img class="pu-avatar pu-avatar-lg" src="<?php echo ($resURL)?>img/avatar/avatar.svg" /> Daniel Wang
    </h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
    <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn now</a></p>
  </div>
</div>
  <div class="container">
    <div class="row row-gap">
  <div class="col-sm-4">
    <article class="pu-box" role="box" style="margin-top: -100px">
      <header class="pu-box-header" role="box-header">
        <h4>Profile</h4>
      </header>
      <section class="pu-box-content">
        <ul class="nav nav-tabs nav-justified nav-line">
          <li class="active">
            <a href="#1z">Details</a>
          </li>
          <li>
            <a href="#2z">Activity</a>
          </li>
          <li>
            <a href="#3z">Documents
                <sup class="badge">2</sup>
            </a>
          </li>
        </ul>
        <div class="tab-content clearfix">
          <div class="tab-pane active" id="1z">
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
          <div class="tab-pane" id="2z">
            <p>Inquit, dasne adolescenti veniam? Mihi quidem Homerus huius modi quitdam Lorem ipsum dolor sit amet, consectetur adipiscing elit. De illis, cum volemus. Inquit, dasne adolescenti
            </p>
          </div>
          <div class="tab-pane" id="3z">
            <p>Mihi quidem Homerus huius modi quitdam Lorem ipsum dolor sit amet, consectetur adipiscing elit. De illis, cum volemus. Inquit, dasne adolescenti
            </p>
          </div>
        </div>
      </section>
    </article>
  </div>
  <div class="col-sm-8">
    <ul class="nav nav-tabs nav-justified pu-tab">
      <li class="active">
          <a href="#2b" data-toggle="tab">History</a>
        </li>
        <li>
          <a href="#1b" data-toggle="tab">Jobs</a>
        </li>
        <li>
          <a href="#1b" data-toggle="tab">Performance</a>
        </li>
        <li>
          <a href="#3b" data-toggle="tab">Learning</a>
        </li>
    </ul>
    <div class="tab-content clearfix">
      <div class="tab-pane active" id="2b">
        <?php include ("${resURL}components/_timeline.html");?>
      </div>
      <div class="tab-pane" id="1b">
        <p>Mihi quidem Homerus huius modi quiddam Lorem ipsum dolor sit amet, consectetur adipiscing elit. De illis, cum volemus. Inquit, dasne adolescenti
        </p>
      </div>
      <div class="tab-pane" id="3b">
        <p>Mihi quidem Homerus huius modi quiddam Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
    </div>
  </div>
</div>
  </div>
<?php endblock() ?>
