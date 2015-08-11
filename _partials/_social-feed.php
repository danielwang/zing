<link href="css/timeline.css" rel="stylesheet" type="text/css" />
<div aria-label="Small button group" role="group" class="btn-group btn-group-sm">
  <button class="btn btn-primary" type="button">Company</button>
  <button class="btn btn-white" type="button">Department</button>
  <button class="btn btn-white" type="button">Team</button>
</div>
<div class="vertical-container light-timeline" id="vertical-timeline">
 <!--   <div id="add-activity" class="small pu-bg">
        <i class="fa fa-lg fa-plus"></i>   
    </div> -->

  	<?php
	for ($x = 0; $x <= 5; $x++) {?> 
	        <div class="vertical-timeline-block">
		        <div class="vertical-timeline-icon orange-bg mgr">
		        	<img class="avatar" src="img/emp/emp3.png">         
		        </div>

		        <div class="vertical-timeline-content">
		            <h5> <a href="#">Matt Kane</a> has created a new learning activity</h5>
		            <span class="vertical-date">
		                <small>15 mins ago</small>   
		            </span>  
		            <div class="learning-card well media">
						<div class="media-left">
							<a href="#">
							  <img class="media-object" src="http://pageuppeoplecareers.com/wp-content/uploads/2013/07/IMG_8107-438x228.jpg">
							</a>
						</div>
						<div class="media-body">
							<h5 class="media-heading"><a href="#">Managing Relationships</a></h5>
							Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.
						</div>
		            </div>
		            <div class="actions">
			            <a class="btn btn-xs btn-white"><i class="fa fa-thumbs-up"></i> Like</a>
			            <a class="btn btn-xs btn-white"><i class="fa fa-plus"></i> Add </a>
			            <a class="btn btn-xs btn-white"><i class="fa fa-share"></i> Share</a>
			        </div>
		        </div>
		    </div>  

	<div class="vertical-timeline-block">
        <div class="vertical-timeline-icon purple-bg">  
        	<img class="avatar" src="img/emp/emp9.png">        
        </div>

        <div class="vertical-timeline-content">
            <h5><a href="#">Simon Cariss</a> has changed profile photo</h5>
            <span class="vertical-date">
                <small>1 hr ago</small>   
            </span> 
            <p> <img src="img/emp/emp9.png" /></p>
            <div class="actions">
	            <a class="btn btn-xs btn-white"><i class="fa fa-thumbs-up"></i> Like </a>
	            <a class="btn btn-xs btn-white"><i class="fa fa-thumbs-down"></i> Dislike</a>
	        </div>
        </div>
    </div>
    <div class="vertical-timeline-block">
        <div class="vertical-timeline-icon purple-bg">  
        	<img class="avatar" src="img/emp/emp8.png">        
        </div>

        <div class="vertical-timeline-content">
            <h5><a href="#">Stephanie Sudano</a> has posted an internal job</h5>
            <span class="vertical-date">
                <small>3 hr ago</small>   
            </span> 
            <p><a href="#">Client Solution Consultant - US </a>Diverse role expanding to system implementation, partner management and technical account management for clients across the US.</p>
            <div class="actions">
	            <a class="btn btn-xs btn-white"> Apply </a>
	            <a class="btn btn-xs btn-white"><i class="fa fa-share"></i> Refer to a friend</a>
	        </div>
        </div>
    </div>
	<div class="vertical-timeline-block">
        <div class="vertical-timeline-icon orange-bg">  
        	<img class="avatar" src="img/emp/emp1.png">       
        </div>

        <div class="vertical-timeline-content">
            <h5> <a href="#">Aaron Hardy</a> has completed a learning activity</h5>
            <span class="vertical-date">
                <small>1 hr ago</small>   
            </span>  
            <div class="learning-card well media">
				<div class="media-left">
					<a href="#">
					  <img class="media-object" src="http://wwwstatic.pageuppeople.com/wp-content/uploads/2014/03/book_sideview_template-248x300.png">
					</a>
				</div>
				<div class="media-body">
					<h5 class="media-heading"><a href="#">Talented Southeast Asia</a></h5>
					Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.
				</div>
            </div>
            <div class="actions">
	            <a class="btn btn-xs btn-white"><i class="fa fa-thumbs-up"></i> Like</a>
	            <a class="btn btn-xs btn-white"><i class="fa fa-plus"></i> Add </a>
	            <a class="btn btn-xs btn-white"><i class="fa fa-share"></i> Share</a>
	        </div>
        </div>
    </div>  

    <div class="vertical-timeline-block">
        <div class="vertical-timeline-icon purple-bg"> 
       	 <img class="avatar" src="img/emp/emp4.png">         
        </div>

        <div class="vertical-timeline-content">
            <h5><a href="#">Paddy Kelleher</a></h5>
            <span class="vertical-date">
                <small>2 hr ago</small>   
            </span> 
        	<p>is going to join the EMEA sales team as their Inside Sales Representative (ISR) based in London. Reporting to Nick Adams, Paddy commences his new role on Wednesday the 19th August 2015.</p>
            <div class="actions">
	            <a class="btn btn-xs btn-white"><i class="fa fa-heart"></i> Congratulate </a>
	        </div>
        </div>
    </div>
 	<?php 
	 }
	?>
</div> 
<style type="text/css">
h5{
	margin:0;
}
.learning-card img{
    width: 100px;
}
.well {
    background-color: #f9f9f9;
    border: 1px solid #eee;
    border-radius: 0;
    box-shadow: none;
    margin-bottom: 5px;
}
.vertical-timeline-content .btn {
    float: none;
}
.media {
    margin-top: 10px;
    font-size: 11px;
}

.vertical-timeline-icon .avatar {
    border: 3px solid #ffa500;
    margin: -15px -20px;
    width: 45px;
}
</style>

