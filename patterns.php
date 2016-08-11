<?php include 'base.php' ?>
<?php startblock('page') ?>
<link rel="stylesheet" href="http://abpetkov.github.io/switchery/dist/switchery.css" />
<script src="http://abpetkov.github.io/switchery/dist/switchery.js"></script>

 	 <?php showPatterns(); ?>

<script type="text/javascript">

var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));

elems.forEach(function(elem) {
  var switchery = new Switchery(elem, { size: 'small', color: '#1493c9' });
});


</script>
<?php endblock() ?>