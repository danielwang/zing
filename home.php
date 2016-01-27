<?php include 'base.php' ?>
<?php startblock('page') ?>
<div class="row row-gap">
	<div class="col-sm-1">

	</div>
	<div class="col-md-6">  
       	<span id="switch"><label> About Me </label> <i class="fa fa-exchange"></i> <label> My Team </label></span>
		<hr>
		<div id ="flipBoard" class="feedpanel">
			<div class="front"> <?php include '_partials/_aboutme.php';?> </div>
		 	<div class="back"> <?php include '_partials/_circle-ui.php';?> </div>
		</div> <!-- -flip panel -->  	
    </div>
    <div class="col-sm-2">

	</div>
	<div class="col-sm-3">
		<div data-offset-top="100" data-spy="affix" class="box text-center affix">
		<h4>Profile completion</h4>
		<br>
		<div attr-data="inprogress" class="circle c100 green center small p75">
		   <span>75%</span>
		   <div class="slice">
		      <div class="bar"></div>
		      <div class="fill"></div>
		   </div>
		</div>
		<p>Update your profile so great opportunities can find you <i class="fa fa-lg fa-smile-o red"></i></p>
		</div>  
		<div class="box">
		<img width="262" src="img/side2.PNG" style="margin-left: -20px;"/>
		</div>
		<div class="box">
		  <h4>Internal vacancies</h4>
		  <ul>
		    <li><a href="#">Software developer</a> - Melbourne</li>
		    <li><a href="#">Designer</a> - Sydney</li>
		  </ul>
		</div>
	</div>
</div>
<?php endblock() ?>
