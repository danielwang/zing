<?php include 'base.php' ?>
<?php startblock('page') ?>
<?php showPatterns(); ?>

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