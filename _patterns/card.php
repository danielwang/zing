
<div class="col-sm-4">
   <div class="pu-card">
   			<img class="avatar-lg pu-card-avatar hide" src="img/emp/emp.jpg">	
        	  <p class="m-b-xs"><strong>Steve Oxley</strong></p>
               <div class="row">
                  <span class="col-xs-12"><i class="fa fa-fw fa-calendar"></i> Friday 04 March 2016  6:00 am -&gt; 7:00 am</span> 
                  <span class="col-xs-12"><i class="fa fa-fw fa-map-marker"></i> London Room level 6 </span> 
                  <span class="col-xs-12"><i class="fa fa-fw fa-suitcase"></i> Graphic Designer #58973654</span>
                  <span class="col-xs-12"><i class="fa fa-fw fa-user"></i> Recruiter: Danielle Berto</span> 
               </div> 
	    <div class="pu-card-footer hide">
	    	<button class="btn btn-sm btn-primary">Action</button>
        </div>
   </div>
</div>
<div class="col-sm-4">
   <div class="pu-card stack">
   		<h5>Job card</h5>
        	Lorem ipsum dolor sit amet, consectetur adipiscing elit. De illis, cum volemus. Inquit, dasne adolescenti veniam? Mihi quidem Homerus huius modi quiddam Lorem ipsum dolor sit amet, consectetur adipiscing elit. De illis, cum volemus. Inquit, dasne adolescenti veniam? Mihi quidem Homerus huius modi quiddam Lorem ipsum dolor sit amet, consectetur adipiscing elit. De illis, cum volemus. Inquit, dasne adolescenti veniam? Mihi quidem Homerus huius modi quiddam ...
	    <div class="pu-card-footer hide">
	    	<button class="btn btn-sm btn-primary">Action</button>
        </div>
   </div>
</div>
<div class="col-sm-2">
	<ul>
	<?php 
		$options = array(
			array("Avatar", "pu-card-avatar"),
			array("Footer", "pu-card-footer"),
			array("Actions", "pu-card-tools")
		);
		//$i = 0;
		for($r=0; $r<count($options); $r++) {
			echo '<li class="checkbox checkbox-info"><input id="'.$options[$r][1].'" type="checkbox" class="styled" value="'.$options[$r][1].'" unchecked /><label for="'.$options[$r][1].'"> '.$options[$r][0].' </label></li>';
		}
  	?>
	</ul>
</div>