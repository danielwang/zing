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

// layout checking
$fluidPage = array("list");
$subnav = false;
$lastSegment = basename(parse_url($url, PHP_URL_PATH));
if (in_array($lastSegment, $fluidPage)) {
	$layout = "-fluid";
	$subnav = true;
} else {
	$layout = "";
}
?>


