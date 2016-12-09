<?php include '../base.php' ?>
<?php startblock('page') ?>

 <div id="dockbody">
        <h2>Human Resources Officer</h2>
        <div class="row row-gap">
          <div class="col-sm-8">
            <div class="pu-box">
                   <div class="pu-box-title">
                       <h4>Position info</h4>
                   </div>
                   <div class="pu-box-content">
                  <?php include '../_partials/_form.html'; ?>
                </div>
              </div>
          </div>
          <div class="col-sm-4">
              <?php include '../_partials/_tabs.html'; ?>  
          </div>
        </div>
      </div>
    </div>
<?php endblock() ?>
