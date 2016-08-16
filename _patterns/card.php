
<div class="col-sm-4">
   <div class="pu-box pu-card">
      <div class="media"> 
        <span class="media-left pu-card-avatar hide"><img class="avatar-lg " src="img/emp/emp.jpg"></span> 
        <span class="media-body"><h5><a href="#_">Daniel Wang</a></h5> <h6>Sales Manager</h6></span> 
      </div>     
      <div class="row">
        <span class="col-xs-12"><i class="fa fa-fw fa-calendar orange"></i> Friday 04 March 2016  6:00 am </span> 
        <span class="col-xs-12"><i class="fa fa-fw fa-map-marker orange"></i> London Room level 6 </span> 
        <span class="col-xs-12"><i class="fa fa-fw fa-suitcase orange"></i> Graphic Designer #58973654</span>
        <span class="col-xs-12"><i class="fa fa-fw fa-user orange"></i> Recruiter: Danielle Berto</span> 
      </div> 
	    <div class="pu-card-footer hide">
	    	<button class="btn btn-sm btn-primary">Action</button>
      </div>
   </div>
</div>
<div class="col-sm-4">
   <div class="pu-box pu-card stack">
   	<h5><a href="#_">Job card</a></h5>
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
      array("Label", "pu-card-label"),
			array("Actions", "pu-card-tools")
		);
		//$i = 0;
		for($r=0; $r<count($options); $r++) {
			echo '<li class="checkbox checkbox-info"><input id="'.$options[$r][1].'" type="checkbox" class="styled" value="'.$options[$r][1].'" unchecked /><label for="'.$options[$r][1].'"> '.$options[$r][0].' </label></li>';
		}
  	?>
	</ul>
</div>

<div class="col-sm-offset-2 col-sm-4">
   <div class="pu-box pu-card">
    <h5><a href="#_">Learning card</a></h5>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. De illis, cum volemus. Inquit, dasne adolescenti veniam? Mihi quidem Homerus huius modi quiddam Lorem ipsum dolor sit amet, consectetur adipiscing elit. De illis, cum volemus. Inquit, dasne adolescenti veniam? Mihi quidem Homerus huius modi quiddam Lorem ipsum dolor sit amet, consectetur adipiscing elit. De illis, cum volemus. Inquit, dasne adolescenti veniam? Mihi quidem Homerus huius modi quiddam ...
      <div class="pu-card-footer hide">
        <button class="btn btn-sm btn-primary">Action</button>
        </div>
   </div>
</div>