
 <?php

ob_start();
include_once "home.php";
flushblocks();
file_put_contents("home.html", ob_get_clean());
//ob_end_clean();
echo "<p>latest static home has been generated</p>";

ob_start();
include_once "index.php";
flushblocks();
file_put_contents("index.html", ob_get_clean());
//ob_end_clean();
echo "<p>latest static index has been generated</p>";

ob_start();
include_once "learning.php";
flushblocks();
file_put_contents("learning.html", ob_get_clean());
//ob_end_clean();
echo "<p>latest static learning has been generated</p>";

/*
$pages = array("index", "home", "dashboard", "learning", "performance");
$arrlength = count($pages);

for ($x = 0; $x < $arrlength; $x++) {
generateStaticPage($pages[$x]);
echo "<p>latest static $pages[$x] has been generated</p>";
}

function generateStaticPage($page) {
ob_start();

$file = (string) $page;

include_once $file;
echo "<h5>$page</h5>";
flushblocks();

file_put_contents("{$page}.html", ob_get_clean());
}
 */

?>