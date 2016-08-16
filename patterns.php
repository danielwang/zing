<?php include 'base.php' ?>
<?php startblock('page') ?>
<div class="row row-gap">
    <div class="col-sm-offset-2 col-sm-8 jumbotron">
      <h1>Design patterns</h1>
      <p>Some common design patterns and elements that will be the source of truth for creating consistent, coherent user experiences across PageUp product. Trying to be scalable and adaptable to facilitate consistency and higher quality outcomes with less effort.  </p>
    </div>
</div>
	
<?php showPatterns('_patterns/foundation'); 
	  showPatterns('_patterns'); 
?>

<script type="text/javascript">
$(document).ready(function(){
	 var checkboxes = $('input[type="checkbox"]');
	  checkboxes.prop('checked', false);
	  checkboxes.click(function(){
	  	var ele = $(this).attr("value");
	  	$('.'+ ele).fadeIn().toggleClass('hide');
	});
});

</script>
<?php endblock() ?>