<?php include '../../base1.php' ?>
<?php startblock('page-title') ?>
<h1>My Developmemt Plan</h1>
<h4><img class="pu-avatar pu-avatar-sm" src="<?php echo ($resURL) ?>/img/avatar/avatar.svg"> Daniel Wang</h4>
<?php endblock() ?>

<?php startblock('page-action') ?>
<ul class="nav navbar-nav navbar-right">
  <li>
    <a class="text-center" href="library">
      <i class="pu-icon pu-icon-2x pu-icon-learning"></i>
      <h6>Library</h6>
    </a>
  </li>
  <li>
    <a class="text-center" href="#_">
      <i class="fa fa-2x fa-calendar"></i>
      <h6>Events</h6>
    </a>
  </li>
</ul>
<?php endblock() ?>
<?php startblock('page-body')?>
<div id="performance">
  <div class="row row-gap">
    <div class="col-sm-3">
      <div class="list-group">
        <a href="#" class="list-group-item active">Inprogress/Upcoming
        </a>
        <a href="#" class="list-group-item">Completed
        </a>
        <a href="#" class="list-group-item">Pending approval</a>
        <a href="#" class="list-group-item">Shared with me</a>
      </div>
    </div>
    <div class="col-sm-9">
      <ul class="nav nav-tabs">
        <li class="active">
          <a href="#1b">Timeslot selection required <span class="badge">3</span></a>
        </li>
        <li>
          <a href="#2b">In progress <span class="badge">5</span></a>
        </li>
        <li>
          <a href="#3b">Booked <span class="badge">7</span></a>
        </li>
        <li>
          <a href="#4b">Suggested <span class="badge">1</span></a>
        </li>
        <li>
          <a href="#5b">Wait list</a>
        </li>
      </ul>
      <div class="tab-content clearfix">
      <div class="tab-pane active" id="1b">
        <dl>
          <dt>Description lists</dt>
          <dd>A description list is perfect for defining terms.</dd>
          <dt>Euismod</dt>
          <dd>Donec id elit non mi porta gravida at eget metus.</dd>
          <dt>Malesuada porta</dt>
          <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
        </dl>
      </div>
      <div class="tab-pane" id="2b">
        <p>De illis, cum volemus. Inquit, dasne adolescenti veniam?</p>
      </div>
      <div class="tab-pane" id="3b">
        <p>Mihi quidem Homerus huius modi quiddam Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
    </div>
    </div>
  </div>
</div>
<?php endblock()?>

<?php emptyblock('footer') ?>
