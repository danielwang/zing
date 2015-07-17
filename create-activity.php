<?php include 'base.php' ?>
<?php startblock('page') ?>
<link rel="stylesheet" href="http://abpetkov.github.io/switchery/dist/switchery.css" />
<script src="http://abpetkov.github.io/switchery/dist/switchery.js"></script>
<form class="form-horizontal" method="get">
	<div class="row">
		<div class="col-md-3">
			<div class="box">
				<p style="color:orange"><i class="fa fa-2x fa-globe"></i> Organisation-wide</p>
			</div>
		</div>
		<div class="col-md-3">
			<div class="box">
				<p><i class="fa fa-2x fa-share-square-o"></i> Shared</p>
			</div>
		</div>
		<div class="col-md-3">
			<div class="box">
				<i class="fa fa-2x fa-lock"></i>  <label>Private</label>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-9">
			<div class="box">
					<div class="form-group"><label class="col-sm-2 control-label">Title</label>

                        <div class="col-sm-10"><input id="title" type="text" class="form-control"></div>

                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label" >Type</label>

                        <div class="col-sm-10">
                        	<select id="type">
                                <option>Select</option>
                                <option>On-the-Job Activities</option>
                                <option>Reading</option>
                                <option>Training</option>
                            </select>
                    	</div>
                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label">Overview</label>

                        <div class="col-sm-10"><textarea class="form-control"></textarea></div>

                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label">Content</label>

                        <div class="col-sm-10">
                        	<div class="row">
	                        	<div class="radio col-sm-3">
	                                <label>
	                                    <input type="radio" checked="true" value="option1" id="optionsRadios1" name="optionsRadios"><span class="circle"></span><span class="check"></span>
	                                    Rich media text
	                                </label>
	                            </div>
	                            <div class="radio col-sm-3">
	                                <label>
	                                    <input type="radio" value="option2" id="optionsRadios2" name="optionsRadios"><span class="circle"></span><span class="check"></span>
	                                    SCORM
	                                </label>
	                            </div>
	                        </div>    
                        	<textarea class="form-control"></textarea>
                        </div>

                    </div>

					<div class="form-group">
						<label class="col-sm-2 control-label">Event schedule</label>

					    <div class="col-sm-10">
					    	<span class="togglebutton">
                                <label>
                                    <input id="event-based" type="checkbox" unchecked />
                                </label>
                            </span>
                            <br>
					    	<?php include '_partials/_datepicker.html' ?>

					    </div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Competencies</label>

					    <div class="col-sm-10">
					    	<button class="btn btn-default btn-raised btn-sm">Add</button>
					    	
					    </div>
					</div>
					<div class="form-group">
						<label class="col-sm-2">Cost associated</label>

					    <div class="col-sm-10">
					    	<span class="togglebutton">
                                <label>
                                    <input type="checkbox" checked =""/>
                                </label>
                            </span>
					    </div>
					</div>
					<hr>
					<div class="form-group">
                        <div class="col-sm-4 col-sm-offset-2">
                            <button type="submit" class="btn btn-white">Cancel</button>
                            <button type="submit" class="btn btn-primary">Create</button>
                        </div>
                    </div>

			</div>
		</div>
		<div class="col-md-3">
			<div class="boxcontainer box">
				<h5 id="card-title"></h5>
				<p><span id="card-type" class="type"></span></p>
		        <figure class="text-center well" style="color:#ccc">
		        	<p><i style="font-size:72px;" class="fa fa-camera"></i></p>
		        	<p style="font-size:11px; color:#999">Valid file formats: JPG, GIF, PNG. Max file size: 2mb
Recommended dimension: 800 x 600 pixels</p>
		        </figure>
				<hr>					
				<img class="avatar-sm" src="img/emp/emp.jpg">
		    </div>
		</div>
	</div>

</form>	

<script type="text/javascript">

//var elem = document.querySelector('.js-switch');
//var switchery = new Switchery();


var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));

elems.forEach(function(elem) {
  var switchery = new Switchery(elem, { size: 'small', color: '#faab43' });
});


$('#event-based').change(function(){
		if(this.checked){ 
			$('.timeslot').fadeIn();
		}else{
			$('.timeslot').fadeOut();
		}
});

$('#title').keyup(function () {
  $('#card-title').text($(this).val());
});
$( '#type').change(function() {
	$('#card-type').text($(this).val());
});
</script>
<?php endblock() ?>
