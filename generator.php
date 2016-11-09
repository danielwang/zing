 <?php
  ob_start(); 

  include_once('index.php');

  file_put_contents("index.html", ob_get_contents());
  ob_end_clean(); // clear the buffer
  echo "<p>latest static index has been generated</p>";
?>