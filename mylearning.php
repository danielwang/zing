<?php include '_partials/head.html';?>
<?php include '_partials/nav.html';?>
<div class="head">
   <div class="container">
   	<div class="row">
      <div class="col-sm-6">
      	<img class="avatar-lg" src="img/emp/emp0.png">
        <div class="m-t-xs font-bold">Daniel Wang</div>
      </div>
      <div class="col-sm-6">
      	<div class="row">
	        <span class="col-xs-6 col-sm-3">
	            <div class="c100 orange center small p100 selected">
	                <span> 3</span>

	                <div class="slice">
	                    <div class="bar"></div>
	                    <div class="fill"></div>
	                </div>
	            </div>
	            <span lang="LEARNING_LIBRARY">Created</span>
	        </span>
	        <span class="col-xs-6 col-sm-3">
	            <div class="c100 blue center small p100">
	                <span>8</span>

	                <div class="slice">
	                    <div class="bar"></div>
	                    <div class="fill"></div>
	                </div>
	            </div>
	            <span lang="IN_PROGRESS">In progress</span>
	        </span>
	        <span class="col-xs-6 col-sm-3">    
	            <div class="c100 green center small p100">
	                <span>1</span>

	                <div class="slice">
	                    <div class="bar"></div>
	                    <div class="fill"></div>
	                </div>
	            </div>
	            <span lang="PENDING_APPROVAL">Pending approval</span>
	        </span>
	        <span class="col-xs-6 col-sm-3">    
	            <div class="c100 purple center small p100">
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

   <!---  *************************************--> 
   <div class="row">
      <div class="col-md-12">
      	<?php include '_partials/learning_cards.html';?>
      </div>
   </div> 
</div>
<script src="js/isotope.pkgd.js"></script>
<script src="js/learning.js"></script>  	
<?php include '_partials/foot.html';?>
