<?php include 'base.php' ?>
<?php startblock('page') ?>
<div class="row row-gap">
	<div class="col-md-8 col-md-offset-2">  
       	<span id="switch"><label> About Me </label> <i class="fa fa-exchange"></i> <label> My Team </label></span>
		<hr>
		<div id ="flipBoard" class="feedpanel">
			<div class="front"> <?php include '_partials/_circle-ui.php';?> </div>
		 	<div class="back"> <?php include '_partials/_orgchart_small.html';?> </div>
		</div> <!-- -flip panel -->  	
    </div>
</div>
<?php endblock() ?>
