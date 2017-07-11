<?php include '../../base1.php' ?>
<?php startblock('page-title') ?>
<h1>Senior graphic designer</h1>
<h4>Job ID: #1234567890</h4>
<?php endblock() ?>
<?php startblock('page') ?>
  <div class="row row-gap">
    <!-- <div class="col-sm-2">
        <ul>
          <li><a href="#">Job Role</a></li>
          <li><a href="#">Headcount Management</a></li>
          <li><a href="#">Position Details</a></li>
          <li><a href="#">Skill and knowledge</a></li>
          <li><a href="#">Employee referral</a></li>
          <li><a href="#">Approvals</a></li>
        </ul>
    </div> -->
    <div class="col-sm-8">
      <div class="pu-panel panel">
             <div class="panel-heading">
                 <h4 class="panel-title">Position info</h4>
             </div>
             <div class="panel-body">
            <?php include ("${resURL}components/_form.html"); ?>
          </div>
        </div>
    </div>
    <div class="col-sm-4">
    <div class="panel">
      <div class="panel-heading">
        <h4 class="panel-title"><i class="fa fa-magic"></i> Additional info </h4>
      </div>
      <div class="panel-body">
        <h6>Title</h6>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. De illis, cum volemus. Inquit, dasne adolescenti veniam? Mihi quidem Homerus huius modi quiddam Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <h6>Title</h6>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. De illis, cum volemus. Inquit, dasne adolescenti veniam? Mihi quidem Homerus huius modi quiddam Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

      </div>
    </div>
  </div>
<?php endblock() ?>
