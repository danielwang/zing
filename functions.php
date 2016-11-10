 <?php
$url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
if (strpos($url, 'apps') !== false) {
	// if it is an app
	$resURL = '../';
	$pageURL = 'apps/';
	$pageClass = "apps";
} else {
	$resURL = '';
	$pageURL = '';
	$pageClass = '';
}

?>


