<?php include 'base.php' ?>
<?php startblock('page') ?>
<link href="css/learning.less" rel="stylesheet" type="text/css" />
   <div class="row row-gap">
      <!---  ***************** time line ********************--> 
      <div class="col-sm-9">
         <div class="row">
            <div class="col-md-4">
               <ul class="PUBreadcrumb">
                  <li><a href="learning.php">Library</a></li>
                  <li class="last selected"><span><a href="#">My Learning</a></span></li>
               </ul>
            </div>
            <div class="col-md-2">               
               <div class="pu-square orange-bg small" style="margin-top:0">
                  <i class="fa fa-plus"></i>   
               </div>
            </div>   
            <div class="col-md-6">
                  <input type="text" placeholder="search" />
            </div>
            <div id="search" class="col-md-8 hide">

               <div id="tabs-892550" class="tabbable tabs-below">
                  <div style="background: #fff; padding: 10px;" class="tab-content">
                     <div id="panel-282702" class="tab-pane active">
                        <!-- ********** advanced search *****************-->                                      
                        <p><input type="text" placeholder="What would you like to learn?" style="width: 80%; padding-top: 8px; padding-bottom: 8px;" id="searchbox">
                           <button>Search</button>
                        </p>
                     </div>
                     <div id="panel-284950" class="tab-pane">
                        <p><span>Current role: </span>
                           <input type="text" style="width: 180px;"> <a class="btn btn-danger" href="cp.html">Explore</a>
                        </p>
                     </div>
                  </div>
                  <ul class="nav nav-tabs">
                     <li class="active"> <a data-toggle="tab" href="#panel-282702"><i class="fa fa-lg fa-search"></i> Search</a>
                     </li>
                     <li> <a data-toggle="tab" href="#panel-284950"><i class="fa fa-lg fa-sitemap fa-rotate-180"></i> Explore your next role</a>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
         <!-- ************ global timeline *********************-->
         <div id="switch-view" class="btn-group pull-right">
            <button type="button" class="btn btn-sm btn-white btn-active" attr-data="cards"><i class="fa fa-lg fa-th"></i></button>
            <button type="button" class="btn btn-sm btn-white" attr-data="light-timeline"><i class="fa fa-lg fa-th-list"></i></button>
         </div>
         <hr class="clearfix">
         <?php include '_partials/_learning_cards.html';?>
         <?php include '_partials/_timeline-learning.php';?>
      </div>
      <div class="col-sm-3">
         <div id="mybox" class="box text-center" data-spy="affix" data-offset-top="100" >
            <img class="avatar-lg" src="img/emp/emp.jpg">
            <p>Daniel Wang</p>
            <hr>
            <div class="row">
               <span class="col-xs-6 text-center">
                  <div class="circle c100 green center xs p100" attr-data="booked">
                     <span>1</span>
                     <div class="slice">
                        <div class="bar"></div>
                        <div class="fill"></div>
                     </div>
                  </div>
                  <span lang="PENDING_APPROVAL">Booked</span>
               </span>
               <span class="col-xs-6 text-center">
                  <div class="circle c100 blue center xs p100" attr-data="inprogress">
                     <span>8</span>
                     <div class="slice">
                        <div class="bar"></div>
                        <div class="fill"></div>
                     </div>
                  </div>
                  <span lang="IN_PROGRESS">In progress</span>
               </span>
               <span class="col-xs-12"> <br><br></span>
               <span class="col-xs-6 text-center">
                  <div class="circle c100 orange center xs p100">
                     <span> 3</span>
                     <div class="slice">
                        <div class="bar"></div>
                        <div class="fill"></div>
                     </div>
                  </div>
                  <span lang="LEARNING_LIBRARY">Created</span>
               </span>
               <span class="col-xs-6 text-center">
                  <div class="circle c100 purple center xs p100" attr-data="complete">
                     <span>5</span>
                     <div class="slice">
                        <div class="bar"></div>
                        <div class="fill"></div>
                     </div>
                  </div>
                  <span>Completed</span>
               </span>
            </div>
            <hr>
            <div class="row">
               <span id="filter" class="col-xs-12 text-left">
                  <h6>Colleague shared learning with you</h6>
                  <ul>
                     <li data-filter=".cat4"> <span class="cert"><i class="fa fa-lg fa-graduation-cap"></i></span> Administrator<span class="num">10</span></li>
                     <li data-filter=".cat3"><img class="avatar" src="img/emp/emp3.png"> Matt Kane <span class="num">5</span></li>
                     <li data-filter=".cat1"><img class="avatar" src="img/emp/emp1.png"> Aaron Hardy<span class="num">3</span></li>
                     <li data-filter=".cat2"><img class="avatar" src="img/emp/emp6.png"> Tal Rotbart<span class="num">1</span></li>
                  </ul>
               </span>
            </div>
         </div>
      </div>
   </div>

<script src="js/learning.js"></script>    
<?php endblock() ?>