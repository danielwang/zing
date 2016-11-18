<!-- template engine http://arshaw.com/phpti/ -->

<?php require_once 'ti.php'?>
<?php include_once 'functions.php';?>
<?php include '_partials/_head.php';?>
<?php include '_partials/_nav.php';?>

<?php
if ($subnav) {
	include '_partials/_subnav.html';
}
?>

<div class="container<?php echo ($layout) ?>">
	<?php startblock('page')?>
	<?php endblock()?>
 </div>
<?php include '_partials/_foot.html';?>
