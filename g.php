 <?php
ob_start();

include_once 'dock.php';
flushblocks();

file_put_contents("dock.html", ob_get_clean());

ob_end_clean(); // clear the buffer
echo "<p>latest static index has been generated</p>";
?>