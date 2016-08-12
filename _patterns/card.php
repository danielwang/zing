
<div class="col-sm-6">
   <div class="card">
   			<img class="avatar-lg pu-card-avatar hide" src="img/emp/emp.jpg">	
        	Lorem ipsum dolor sit amet, consectetur adipiscing elit. De illis, cum volemus. Inquit, dasne adolescenti veniam? Mihi quidem Homerus huius modi quiddam Lorem ipsum dolor sit amet, consectetur adipiscing elit. De illis, cum volemus. Inquit, dasne adolescenti veniam? Mihi quidem Homerus huius modi quiddam Lorem ipsum dolor sit amet, consectetur adipiscing elit. De illis, cum volemus. Inquit, dasne adolescenti veniam? Mihi quidem Homerus huius modi quiddam ...
	    <div class="pu-card-footer hide">
	    	<button class="btn btn-sm btn-primary">Action</button>
        </div>
   </div>
</div>
<div class="col-sm-4">
	<ul>
	<?php 
		$options = array(
			array("Avatar", "pu-card-avatar"),
			array("Footer", "pu-card-footer"),
			array("Actions", "pu-card-tools")
		);
		//$i = 0;
		for($r=0; $r<count($options); $r++) {
			echo '<li class="checkbox checkbox-info checkbox-circle"><input id="'.$options[$r][1].'" type="checkbox" class="styled" value="'.$options[$r][1].'" unchecked /><label for="'.$options[$r][1].'"> '.$options[$r][0].' </label></li>';
		}
  	?>
	</ul>
</div>