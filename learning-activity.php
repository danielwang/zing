<?php include 'base.php' ?>
<?php startblock('page') ?>
<style type="text/css">
.side .row {
      margin-bottom: 20px;
      padding-bottom: 5px;
  }
.side i {
    color: #e8910c;
  }
.side .dash {
      border-bottom: 1px dashed #ddd;
      padding-bottom: 5px;
  }
</style>
   <div class="box">
      <div class="row">
          <div class="col-sm-6">
              <h4>Talent Mobility</h4>
              <img width="100%" src="http://wwwstatic.pageuppeople.com/wp-content/uploads/2015/03/mobile-blog-pic2.jpg" />
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>

              <hr>
              <?php include '_partials/_comments.html';?>
          </div>
          <div class="col-sm-4 col-sm-offset-1 side">
            <div ng-show="activity.status" class="row">
                <div class="col-xs-6 col-lg-4"><i class="fa fa-info fa-fw"></i> <span lang="STATUS">Status</span></div>
                <div class="col-sm-6 col-lg-8 dash ng-binding">In progress</div>
            </div>
            <div class="row">
                <div class="col-xs-6 col-lg-4"><i class="fa fa-user fa-fw"></i> <span lang="CREATED_BY">Created by</span></div>
                <div class="col-sm-6 col-lg-8 dash ng-binding"><img class="avatar-sm" src="img/emp/emp.jpg"> Daniel Wang</div>
            </div>
            <div class="row">
                <div class="col-xs-6 col-lg-4"><i class="fa fa-clock-o fa-fw"></i> <span lang="APPLICANT_CREATE_DATE">Created</span></div>
                <div class="col-sm-6 col-lg-8 dash activity-created-date ng-binding">21 Aug 15</div>
            </div>
            <div class="row">
                <div class="col-xs-6 col-lg-4"><i class="fa fa-files-o fa-fw"></i> <span lang="TYPE">Type</span></div>
                <div class="col-sm-6 col-lg-8 dash ng-binding">Online Video Learning</div>
            </div>
            <div ng-show="activity.validity !== 0" class="row ng-hide">
                <div class="col-xs-6 col-lg-4"><i class="fa fa-history fa-fw"></i> <span lang="VALID_FOR">Valid for</span></div>
                <div class="col-sm-6 col-lg-8 dash ng-binding">0 <span lang="DAYS">Days</span></div>
            </div>
            <div class="row">
                <div class="col-xs-6 col-lg-4"><i class="fa fa-thumbs-o-up fa-fw"></i> <span lang="POPULARITY">Popularity</span>
                </div>
                <div class="col-sm-6 col-lg-8 dash"> 
                  <img class="avatar-sm" src="img/emp/emp1.png"><img class="avatar-sm" src="img/emp/emp2.png">
                  <img class="avatar-sm" src="img/emp/emp3.png"><img class="avatar-sm" src="img/emp/emp4.png">
                  <img class="avatar-sm" src="img/emp/emp5.png"><img class="avatar-sm" src="img/emp/emp6.png">
                  <img class="avatar-sm" src="img/emp/emp7.png"><img class="avatar-sm" src="img/emp/emp8.png">
                  <img class="avatar-sm" src="img/emp/emp9.png"><img class="avatar-sm" src="img/emp/emp10.png">
                  <img class="avatar-sm" src="img/emp/emp11.png"><img class="avatar-sm" src="img/emp/emp12.png">
                </div>
            </div>


            <div ng-show="activity.competencies.length !== 0">
            <h6 lang="COMPETENCIES">Competencies</h6>

            <!-- ngRepeat: c in activity.competencies --><p ng-repeat="c in activity.competencies" class="ng-scope">
                <a popover-trigger="focus" popover="Introducing original ideas; applying new methods; being creative." popover-placement="right" href="" ng-show="c.overview.length !==0" class="ng-scope ng-binding">Innovation</a>
                <span ng-show="c.overview.length ===0" class="ng-binding ng-hide">Innovation </span>
                - <span class="level ng-binding">People Leader</span>
            </p><!-- end ngRepeat: c in activity.competencies --><p ng-repeat="c in activity.competencies" class="ng-scope">
                <a popover-trigger="focus" popover="Introducing original ideas; applying new methods; being creative." popover-placement="right" href="" ng-show="c.overview.length !==0" class="ng-scope ng-binding">Innovation</a>
                <span ng-show="c.overview.length ===0" class="ng-binding ng-hide">Innovation </span>
                - <span class="level ng-binding">Technical Leader</span>
            </p><!-- end ngRepeat: c in activity.competencies --><p ng-repeat="c in activity.competencies" class="ng-scope">
                <a popover-trigger="focus" popover="Introducing original ideas; applying new methods; being creative." popover-placement="right" href="" ng-show="c.overview.length !==0" class="ng-scope ng-binding">Innovation</a>
                <span ng-show="c.overview.length ===0" class="ng-binding ng-hide">Innovation </span>
                - <span class="level ng-binding">Business Leader</span>
            </p><!-- end ngRepeat: c in activity.competencies --><p ng-repeat="c in activity.competencies" class="ng-scope">
                <a popover-trigger="focus" popover="Creating and defining a broad, compelling organisational vision, and organising and inspiring others to pursue it." popover-placement="right" href="" ng-show="c.overview.length !==0" class="ng-scope ng-binding">Leadership (Strategic)</a>
                <span ng-show="c.overview.length ===0" class="ng-binding ng-hide">Leadership (Strategic) </span>
                - <span class="level ng-binding">Team Member</span>
            </p><!-- end ngRepeat: c in activity.competencies --><p ng-repeat="c in activity.competencies" class="ng-scope">
                <a popover-trigger="focus" popover="Creating and defining a broad, compelling organisational vision, and organising and inspiring others to pursue it." popover-placement="right" href="" ng-show="c.overview.length !==0" class="ng-scope ng-binding">Leadership (Strategic)</a>
                <span ng-show="c.overview.length ===0" class="ng-binding ng-hide">Leadership (Strategic) </span>
                - <span class="level ng-binding">People Leader</span>
            </p><!-- end ngRepeat: c in activity.competencies --><p ng-repeat="c in activity.competencies" class="ng-scope">
                <a popover-trigger="focus" popover="Creating and defining a broad, compelling organisational vision, and organising and inspiring others to pursue it." popover-placement="right" href="" ng-show="c.overview.length !==0" class="ng-scope ng-binding">Leadership (Strategic)</a>
                <span ng-show="c.overview.length ===0" class="ng-binding ng-hide">Leadership (Strategic) </span>
                - <span class="level ng-binding">Technical Leader</span>
            </p><!-- end ngRepeat: c in activity.competencies --><p ng-repeat="c in activity.competencies" class="ng-scope">
                <a popover-trigger="focus" popover="Creating and defining a broad, compelling organisational vision, and organising and inspiring others to pursue it." popover-placement="right" href="" ng-show="c.overview.length !==0" class="ng-scope ng-binding">Leadership (Strategic)</a>
                <span ng-show="c.overview.length ===0" class="ng-binding ng-hide">Leadership (Strategic) </span>
                - <span class="level ng-binding">Business Leader</span>
            </p><!-- end ngRepeat: c in activity.competencies -->
        </div>
        </div>
      </div>
   </div>  
<?php endblock() ?>