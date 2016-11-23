<?php

$pages = array("list.html", "dock.html", "systemsetting.html", "journal.html", "typography.html", "index.html", "home.html", "dashboard.html", "learning.html", "performance.html");
$arrlength = count($pages);

for ($x = 0; $x < $arrlength; $x++) {
	if (file_exists($pages[$x])) {
		unlink($pages[$x]);
		echo "<p><strong>$pages[$x]</strong> has been removed</p>";
	} else {
		echo "<p><strong>$pages[$x]</strong> doesn't exist</p>";
	}
}
echo "<a href='g.php'>Generate</a>";
?>