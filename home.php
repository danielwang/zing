<?php include 'base.php' ?>
<?php startblock('page') ?>
<div class="row row-gap">
	<div class="col-sm-3">
		
	</div>
	<div class="col-md-6">  
       	<span id="switch"><label> About Me </label> <i class="fa fa-exchange"></i> <label> My Team </label></span>
		<hr>
		<div id ="flipBoard" class="feedpanel">
			<div class="front"> <?php include '_partials/_aboutme.php';?> </div>
		 	<div class="back"> <?php include '_partials/_circle-ui.php';?> </div>
		</div> <!-- -flip panel -->  	
    </div>
	<div class="col-sm-3">
		 <?php //include '_partials/_feeds.php';?>
	</div>
</div>
<?php endblock() ?>
