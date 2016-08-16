<div class="col-sm-8">
   <div class="pu-box">
   		<div class="pu-box-title">
            <h5 data-toggle="collapse" href="#collapseExample"><span class="pu-box-icon hide"><i class="fa fa-leaf" aria-hidden="true"></i></span> This is box title <small class="pu-box-label hide"><label class="label label-warning">label</label></small></h5>
            <div class="pu-box-tools hide">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                    <i class="fa fa-ellipsis-h fa-lg" aria-hidden="true"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#">Action 1</a>
                    </li>
                    <li><a href="#">Action 2</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="pu-box-content collapse in" id="collapseExample">
        	Lorem ipsum dolor sit amet, consectetur adipiscing elit. De illis, cum volemus. Inquit, dasne adolescenti veniam? Mihi quidem Homerus huius modi quiddam Lorem ipsum dolor sit amet, consectetur adipiscing elit. De illis, cum volemus. Inquit, dasne adolescenti veniam? Mihi quidem Homerus huius modi quiddam Lorem ipsum dolor sit amet, consectetur adipiscing elit. De illis, cum volemus. Inquit, dasne adolescenti veniam? Mihi quidem Homerus huius modi quiddam ...
        </div>
        <div class="pu-box-footer hide">
        	<button class="btn btn-sm btn-primary">Action</button>
        </div>
   </div>
</div>
<div class="col-sm-2">
	<ul>
	<?php 
		$options = array(
			array("Expandable", "pu-box-icon"),
			array("Label", "pu-box-label"),
			array("Footer", "pu-box-footer"),
			array("Actions", "pu-box-tools"),
		);
		//$i = 0;
		for($r=0; $r<count($options); $r++) {
			echo '<li class="checkbox checkbox-info"><input id="'.$options[$r][1].'" type="checkbox" class="styled" value="'.$options[$r][1].'" unchecked /><label for="'.$options[$r][1].'"> '.$options[$r][0].' </label></li>';
		}
  	?>
	</ul>
</div>
