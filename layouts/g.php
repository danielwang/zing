
 <?php
ob_start();
include_once 'fluid.php';
flushblocks();
file_put_contents("fluid.html", ob_get_contents());
ob_end_clean(); // clear the buffer
echo "<p>latest static index has been generated</p>";

echo "<a href='d.php'>Delete all html files</a>";
?>