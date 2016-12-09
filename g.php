
 <?php
 compileIndex();
 function compileIndex(){
   $url = 'http://localhost:9000/mockup/index.php';
   $ch = curl_init();
   // tell cURL what the URL is
   curl_setopt($ch, CURLOPT_URL, $url);
   // tell cURL that you want the data back from that URL
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
   // run cURL
   $output = curl_exec($ch);
   // end the cURL call (this also cleans up memory so it is
   // important)
   curl_close($ch);
   // display the output
   file_put_contents("index.html", $output);
   echo "<h3>Index is done</h3>";
 }


/* read php files from folders */
$folders = array("layouts", "modules", "patterns");
for ($i = 0; $i < count($folders); $i++) {
	readFolders($folders[$i]);
}

function readFolders($foldername) {
	echo "<h3>reading $foldername folder </h3>";
	$files = array();
	$handle = opendir($foldername . '/');
	while (false !== ($file = readdir($handle))):
		if (stristr($file, '.php')):
			$files[] = $file;
		endif;
	endwhile;
	sort($files);
	chdir($foldername);
	foreach ($files as $file):
		echo "converting $file <br>";
    viewSource($foldername, $file);
		// generateStaticPage($foldername, $file);
	endforeach;
	chdir("../");
}
/* read php files then output html */
function viewSource($foldername, $page){
  // define the URL to load
  $url = 'http://localhost:9000/mockup/'. $foldername . '/' . $page;
  // start cURL
  $ch = curl_init();
  // tell cURL what the URL is
  curl_setopt($ch, CURLOPT_URL, $url);
  // tell cURL that you want the data back from that URL
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  // run cURL
  $output = curl_exec($ch);
  // end the cURL call (this also cleans up memory so it is
  // important)
  curl_close($ch);
  // display the output
  // echo $output;
  $outputfile = str_replace(".php", "", "{$page}.html");
  file_put_contents($outputfile, $output);
}

// function generateStaticPage($foldername, $page) {
// 	ob_start();
// 	$file = (string) $foldername . '/' . $page;
// 	include_once "{$file}";
// 	flushblocks();
// 	$outputfile = str_replace(".php", "", "{$page}.html");
// 	/* output to folders*/
// 	//echo $outputfile;
// 	file_put_contents($outputfile, ob_get_clean());
// }
// echo "<a href='d.php'>Delete all html files</a>";
// ?>
