 <?php
$url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
$lastSegment = basename(parse_url($url, PHP_URL_PATH));
if ($_SERVER['SERVER_NAME'] == 'localhost') {
	$ext = ".php";
} else {
	$ext = '.html';
}
// layout checking
$fluidPage = array("list.php");
$subnav = false;

if (in_array($lastSegment, $fluidPage)) {
	$layout = "-fluid";
	$subnav = true;
} else {
	$layout = "";
}

$subfolder = array("performance", "list", "timeline", "typography");
if (in_array($lastSegment, $subfolder)) {
	$resURL = '../';
} else {
	$resURL = '';
}

?>






