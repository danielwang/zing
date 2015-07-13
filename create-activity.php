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

                        <div class="col-sm-10"><input type="text"></div>

                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label">Type</label>

                        <div class="col-sm-10">
                        	<select>
                                <option>option 1</option>
                                <option>option 2</option>
                                <option>option 3</option>
                                <option>option 4</option>
                            </select>
                    	</div>
                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label">Overview</label>

                        <div class="col-sm-10"><textarea class="form-control"></textarea></div>

                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label">Content</label>

                        <div class="col-sm-10"><textarea class="form-control"></textarea></div>

                    </div>

					<div class="form-group">
						<label class="col-sm-2 control-label">Event schedule</label>

					    <div class="col-sm-10">
					    	<input id="event-based" type="checkbox" class="js-switch" unchecked/>
					    	<br><br>
					    	<?php include '_partials/_datepicker.html' ?>
					    </div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Competencies</label>

					    <div class="col-sm-10">
					    	<input id="competency" type="checkbox" class="js-switch" unchecked/>
					    	<br>
					    	
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
			<div class="box">

		        <figure class="text-center well" style="font-size:72px; color:#ccc"><i class="fa fa-camera"></i></figure>
		        <p>Valid file formats: JPG, GIF, PNG. Max file size: 2mb
Recommended dimension: 800 x 600 pixels</p>
				<hr>	
					
					
					<div class="form-group">
						<label class="col-sm-8">Cost associated</label>

					    <div class="col-sm-4">
					    	<input id="cost" type="checkbox" class="js-switch" unchecked/>
					    	<br>
					    	
					    </div>
					</div>
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
</script>
<?php endblock() ?>
