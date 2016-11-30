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

$rootfolder = array("index");
if (in_array($lastSegment, $rootfolder)) {
	$resURL = '';
} else {
	$resURL = '../';
}

// Display pages as links from a folder
function listElementsAsOptions($type) {
	//echo "<h1>kfdjkfd sjdkfj sd</h1>";
	$files = array();
	$handle = opendir($type . '/');
	while (false !== ($file = readdir($handle))):
		if (stristr($file, '.php')):
			$files[] = $file;
		endif;
	endwhile;
	sort($files);
	foreach ($files as $file):
		$filename = preg_replace("/\.php$/i", "", $file);
		$title = preg_replace("/\-/i", " ", $filename);
		$title = ucwords($title);
		echo '<li><a href="' . $type . '/' . $filename . '">' . $title . '</a></li>';
	endforeach;
}

?>






