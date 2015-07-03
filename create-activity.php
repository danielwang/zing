<?php include 'base.php' ?>
<?php startblock('page') ?>

	<div class="box">
		<div class="row">
			<div class="col-md-6">
				<h4 class="editable" contenteditable="true">
					Activity title
				</h4>
				<i class="fa fa-picture-o"></i>
				<i class="fa fa-calendar"></i>
				<i class="fa fa-dropbox"></i>
				<i class="fa fa-youtube-play"></i>

			</div>
			<div class="col-md-4 col-md-offset-1">
		        <div class="row">
		            <div class="col-xs-6 col-lg-4"><i class="fa fa-files-o fa-fw"></i> <span lang="TYPE">Type</span></div>
		            <div class="col-sm-6 col-lg-8 dash ng-binding">On-the-Job Activities</div>
		        </div>
		        
		        <div class="row ng-hide" ng-show="activity.validity !== 0">
		            <div class="col-xs-6 col-lg-4"><i class="fa fa-history fa-fw"></i> <span lang="VALID_FOR">Valid for</span></div>
		            <div class="col-sm-6 col-lg-8 dash ng-binding">0 <span lang="DAYS">Days</span></div>
		        </div>
		    </div>
		</div>
		<div class="row">
			<div class="col-md-12">
			</div>
		</div>
	</div>	
</div>
<?php endblock() ?>
