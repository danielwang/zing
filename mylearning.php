<?php include '_partials/head.html';?>
<?php include '_partials/nav.html';?>
<div class="head">
   <div class="container">
   	<div class="row">
      <div class="col-sm-3">
      	<div class="box text-center" style="position: sticky;">
          <h4>My learning</h4>
	      	<img class="avatar-lg" src="img/emp/emp.jpg">
	        <p>Daniel Wang</p>
	        <hr>
	           <div class="row">
		        <span class="col-xs-6 text-center">
		            <div class="c100 orange center xs p100 selected">
		                <span> 3</span>

		                <div class="slice">
		                    <div class="bar"></div>
		                    <div class="fill"></div>
		                </div>
		            </div>
		            <span lang="LEARNING_LIBRARY">Created</span>
		        </span>
		        <span class="col-xs-6 text-center">
		            <div class="c100 blue center xs p100">
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
		            <div class="c100 green center xs p100">
		                <span>1</span>

		                <div class="slice">
		                    <div class="bar"></div>
		                    <div class="fill"></div>
		                </div>
		            </div>
		            <span lang="PENDING_APPROVAL">Booked</span>
		        </span>
		        <span class="col-xs-6 text-center">    
		            <div class="c100 purple center xs p100">
		                <span>5</span>

		                <div class="slice">
		                    <div class="bar"></div>
		                    <div class="fill"></div>
		                </div>
		            </div>
		            <span>Completed</span>
		        </span>
		    </div>

		</div>
      </div>
<!---  ***************** time line ********************--> 
      <div class="col-sm-9">
      	<div class="row">
		    <div class="col-md-4">
             <!-- dimonds -->
             <div class="col-xs-4 text-center">
                <a href="learning.php"><span>Library</span></a> 
             </div>
             <div class="col-xs-4 text-center">
                <span>MyLearning</span> 
             </div>
          </div>
          <div id="search" class="col-md-8">
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

    	<?php include '_partials/timeline-learning.php';?>
      </div>
   </div> 

  

</div>

<script src="js/learning.js"></script>  	
<?php include '_partials/foot.html';?>
