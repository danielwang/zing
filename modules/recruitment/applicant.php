<?php include '../../base1.php' ?>

<?php startblock('page-title') ?>
<h1>James Bond</h1>
<h4><i class="pu-icon pu-icon-job"></i> Junior Professor in Landscape Architecture</h4>
<?php endblock() ?>
<?php startblock('page-action') ?>
<ul class="nav navbar-nav navbar-right">
  <li>
    <a class="text-center" href="#_">
      <i class="pu-icon pu-icon-2x pu-icon-printer"></i>
      <h6>Print</h6>
    </a>
  </li>
  <li>
    <a class="text-center" href="#_">
      <i class="pu-icon pu-icon-2x pu-icon-control"></i>
      <h6>Control</h6>
    </a>
  </li>
  <li>
    <a class="text-center" href="#_">
      <i class="pu-icon pu-icon-2x pu-icon-resume"></i>
      <h6>Resume</h6>
    </a>
  </li>
</ul>
<?php endblock() ?>
<?php startblock('sub-page') ?>
<ul class="nav nav-pills">
  <li class="active"><a href="#">Applications</a></li>
  <li><a href="#">Profile</a></li>
  <li><a href="#">Resume</a></li>
  <li><a href="#">TRM</a></li>
</ul>
<?php endblock() ?>
<?php startblock('submenu') ?>
<nav class="subnav" data-spy="affix" data-offset-top="220">
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <div class="pu-buckets btn-group" data-toggle="buttons">
            <label class="btn bucket-green active" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Green Bucket">
              <input type="radio" id="bucket1" name="bucket" value="1">
              <i class="fa fa-lg fa-bitbucket" aria-hidden="true"></i>
            </label>
            <label class="btn bucket-orange" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Orange Bucket">
              <input type="radio" id="bucket2" name="bucket" value="2">
              <i class="fa fa-lg fa-bitbucket" aria-hidden="true"></i>
            </label>
            <label class="btn bucket-red" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Red Bucket">
              <input type="radio" id="bucket3" name="bucket" value="3">
              <i class="fa fa-lg fa-bitbucket" aria-hidden="true"></i>
            </label>
          </div>

          <div class="btn-group">
            <button type="button" class="btn btn-default">
              <i class="fa fa-chevron-left" aria-hitden="true"></i>
            </button>
            <button type="button" class="btn btn-default">
              <i class="fa fa-chevron-right" aria-hitden="true"></i>
            </button>
          </div>
          6 of 12
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

<?php startblock('page-body') ?>
  <div class="row row-gap">
  <div class="col-sm-8">
    <div class="panel">
      <div class="panel-heading">
        <h4 class="panel-title">Profile</h4>
      </div>
      <div class="panel-body row">
        <dl>
          <div class="col-sm-6">
            <dt>Address:</dt>
            <dd>19 Good Governs St, Mitcham, VIC Australia 3132 </dd>
            <dt>Email:</dt>
            <dd><a href="#">james.bond@pup.org.au</a></dd>
            <dt>Mobile:</dt>
            <dd>+61 0400 000 123</dd>
            <dt>Number:</dt>
            <dd>6361</dd>
            <dt>Original source:</dt>
            <dd>Seek</dd>
            <dt>Flags:</dt>
            <dd>
                  <i class="fa fa-plane yellow" aria-hitden="true"></i>
                  <i class="fa fa-flag green"></i>
                  <i class="fa fa-phone red"></i>
                  <i class="fa fa-trophy purple"></i>
            </dd>
          </div>
          <div class="col-sm-6">
            <dt>Gender:</dt>
            <dd>Male</dd>
            <dt>Birth date:</dt>
            <dd>30 Jan 1977</dd>
            <dt>Employment Status:</dt>
            <dd>Current employed</dd>
            <dt>Nationality:</dt>
            <dd>Australia</dd>
            <dt>Linked Employee:</dt>
            <dd><a href="#">Tim Mann</a></dd>
            <dt>e-Zines comms hold:</dt>
            <dd><div class="pu-toggle-btn pu-toggle-btn-green">
                <label>
                    <input type="checkbox" checked>
                    <span></span>
                </label>
              </div>
            </dd>
          </div>
        </dl>
      </div>
    </div>
    <div class="pu-panel panel">
      <div class="panel-heading">
        <h4 class="panel-title">Applications</h4>
      </div>
      <div class="panel-body">
        <article class="pu-card" role="card" style="max-width:none; border:1px solid #ddd">
            <header class="pu-card-header" role="card-header">
              <h4>
                  <a href="#_"><i class="pu-icon pu-icon-job"></i></a> Junior Professor in Landscape Architecture
              </h4>
              <div class="row">
                <div class="col-sm-6">
                  <p class="gray"><small>Job ID: #201700281</small></p>
                </div>
                <div class="col-sm-6 text-right">
                  <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-primary dropdown-toggle" data-toggle="dropdown">Actions
                        <span class="caret"></span>
                      </button>
                      <ul class="dropdown-menu" role="menu">
                        <li>
                          <a href="#">Action</a>
                        </li>
                        <li>
                          <a href="#">Another action</a>
                        </li>
                        <li>
                          <a href="#">Something else here</a>
                        </li>
                        <li>
                          <a href="#">Separated link</a>
                        </li>
                      </ul>
                    </div>
                </div>
              </div>
            </header>
            <section class="pu-card-content" role="card-content">
              <dl class="dl-horizontal">
                <dt>Submitted:</dt>
                <dd>19 Oct 15, 03:53 PM via <a href="#">Linkedin</a></dd>
                <dt>Hiring Manager:</dt>
                <dd><a href="#">Daniel Wang</a></dd>
                <dt>Status:</dt>
                <dd><a href="#">Hiring Manager Review</a></dd>
                <dt>Flags:</dt>
                <dd>
                      <i class="fa fa-plane yellow" aria-hitden="true"></i>
                      <i class="fa fa-flag green"></i>
                      <i class="fa fa-phone red"></i>
                      <i class="fa fa-trophy purple"></i>
                </dd>
                <dt>Form:</dt>
                <dd><a href="#">View answers</a></dd>
                <dt>Resume:</dt>
                <dd><a href="#">Download</a></dd>
                <dt>Offer status:</dt>
                <dd><a href="#">No offer</a></dd>
              </dl>
            </section>
        </article>
        <article class="pu-card" role="card" style="max-width:none; border:1px solid #ddd">
            <header class="pu-card-header" role="card-header">
              <h4>
                  <a href="#_"><i class="pu-icon pu-icon-job"></i></a> Assistant Professor in Landscape Architecture
              </h4>
              <div class="row">
                <div class="col-sm-6">
                  <p class="gray"><small>Job ID: #201700281</small></p>
                </div>
                <div class="col-sm-6 text-right">
                  <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-primary dropdown-toggle" data-toggle="dropdown">Actions
                        <span class="caret"></span>
                      </button>
                      <ul class="dropdown-menu" role="menu">
                        <li>
                          <a href="#">Action</a>
                        </li>
                        <li>
                          <a href="#">Another action</a>
                        </li>
                        <li>
                          <a href="#">Something else here</a>
                        </li>
                        <li>
                          <a href="#">Separated link</a>
                        </li>
                      </ul>
                    </div>
                </div>
              </div>
            </header>
            <section class="pu-card-content" role="card-content">
              <dl class="dl-horizontal">
                <dt>Submitted:</dt>
                <dd>19 Oct 15, 03:53 PM via <a href="#">Linkedin</a></dd>
                <dt>Hiring Manager:</dt>
                <dd><a href="#">Daniel Wang</a></dd>
                <dt>Status:</dt>
                <dd><a href="#">New</a></dd>
                <dt>Flags:</dt>
                <dd>
                      <i class="fa fa-plane yellow" aria-hitden="true"></i>
                      <i class="fa fa-flag green"></i>
                      <i class="fa fa-phone red"></i>
                      <i class="fa fa-trophy purple"></i>
                </dd>
                <dt>Form:</dt>
                <dd><a href="#">View answers</a></dd>
                <dt>Resume:</dt>
                <dd><a href="#">Download</a></dd>
                <dt>Offer status:</dt>
                <dd><a href="#">No offer</a></dd>
              </dl>
            </section>
        </article>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <h4>History</h4>
    <?php include ("${resURL}components/_timeline.html");?>
  </div>
</div>

<?php endblock() ?>
