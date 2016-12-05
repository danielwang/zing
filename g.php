
 <?php
ob_start();
include_once 'layouts/fluid.php';

file_put_contents("fluid.html", ob_get_contents());
ob_end_clean(); // clear the buffer
echo "<p>latest static index has been generated</p>";

// $pages = array("form.php", "list.php", "dock.php", "systemsettings.php", "journal.php", "typography.php", "index.php", "home.php", "dashboard.php", "learning.php", "performance.php");
// $arrlength = count($pages);

// for ($x = 0; $x < $arrlength; $x++) {
// 	if (file_exists($pages[$x])) {
// 		generateStaticPage($pages[$x]);
// 		echo "<p><strong>$pages[$x]</strong> has been generated</p>";
// 	} else {
// 		echo "<p style='color:red'><strong>$pages[$x]</strong> doesn't exist</p>";
// 	}
// }


/* read php files from folders */
// $folders = array("layouts", "modules", "patterns");
// for ($i = 0; $x < count($folders); $i++) {
// 	readFolders($folders[$i]);
// }

// function readFolders ($foldername) {
// 	echo "reading $foldername folder <br>";
//     $files = array();
//     $handle=opendir($foldername.'/');
//     while (false !== ($file = readdir($handle))):
//         if(stristr($file,'.php')):
//             $files[] = $file;
//         endif;
//     endwhile;
//     sort($files);
//     foreach ($files as $file):
//        generateStaticPage($foldername, $file);
//     endforeach;
//   }

// /* read php files then output html */
// function generateStaticPage($foldername, $page) {
// 	ob_start();
// 	$file = (string) $foldername . '/' . $page;
// 	echo "converting $file <br>";
// 	include_once "{$file}";
// 	flushblocks();
// 	$outputfile = str_replace(".php", "", "{$page}.html");
// 	/* output to folders*/
// 	//echo $outputfile;
// 	file_put_contents($outputfile, ob_get_clean());
// }
echo "<a href='d.php'>Delete all html files</a>";
?>