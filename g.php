
 <?php

// ob_start();
// include_once "home.php";
// flushblocks();
// file_put_contents("home.html", ob_get_clean());
// //ob_end_clean();
// echo "<p>latest static home has been generated</p>";

// ob_start();
// include_once "index.php";
// flushblocks();
// file_put_contents("index.html", ob_get_clean());
// //ob_end_clean();
// echo "<p>latest static index has been generated</p>";

// ob_start();
// include_once "learning.php";
// flushblocks();
// file_put_contents("learning.html", ob_get_clean());
// //ob_end_clean();
// echo "<p>latest static learning has been generated</p>";

// ob_start();
// include_once "list.php";
// flushblocks();
// file_put_contents("list.html", ob_get_clean());
// //ob_end_clean();
// echo "<p>latest static list has been generated</p>";

$pages = array("list.php", "index.php", "home.php", "dashboard.php", "learning.php", "performance.php");
$arrlength = count($pages);

for ($x = 0; $x < $arrlength; $x++) {
	generateStaticPage($pages[$x]);
	echo "<p>latest static $pages[$x] has been generated</p>";
}

function generateStaticPage($page) {
	ob_start();

	$file = (string) $page;

	include_once "{$file}";
	flushblocks();

	$outputfile = str_replace(".php", "", "{$page}.html");
	echo $outputfile;
	file_put_contents($outputfile, ob_get_clean());
}

?>