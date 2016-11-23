
 <?php

// ob_start();
// include_once "list.php";
// flushblocks();
// file_put_contents("list.html", ob_get_clean());
// //ob_end_clean();
// echo "<p>latest static page has been generated</p>";

$pages = array("form.php", "list.php", "dock.php", "systemsetting.php", "journal.php", "typography.php", "index.php", "home.php", "dashboard.php", "learning.php", "performance.php");
$arrlength = count($pages);

for ($x = 0; $x < $arrlength; $x++) {
	generateStaticPage($pages[$x]);
	echo "<p><strong>$pages[$x]</strong> has been generated</p>";
}

function generateStaticPage($page) {
	ob_start();
	$file = (string) $page;
	include_once "{$file}";
	flushblocks();
	$outputfile = str_replace(".php", "", "{$page}.html");
	file_put_contents($outputfile, ob_get_clean());
}
echo "<a href='d.php'>Delet all html files</a>";
?>