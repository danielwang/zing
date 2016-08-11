 <?php
  $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
  if (strpos($url,'apps') !== false) { // if it is an app
      $resURL = '../'; 
      $pageURL = 'apps/';
      $pageClass= "apps";
  } else {
      $resURL = '';
      $pageURL = '';
      $pageClass= '';
  }

   // Display foundation elements
    function showPatterns() {
      //include('_patterns/box.php');
      $files = array();
      $handle=opendir('_patterns/');
      while (false !== ($file = readdir($handle))):
          if(stristr($file,'.php')):
              $files[] = $file;
          endif;
      endwhile;
      
      sort($files);
      foreach ($files as $file):
          $filename = preg_replace("/\.php$/i", "", $file);
          $title = preg_replace("/\-/i", " ", $filename);
          echo '<div class="row row-gap"><div class="col-sm-2">';
          echo '<h4>'.$title.'</h4>';
          echo '</div>';
          include('_patterns/'.$file);
          echo '</div>';
      endforeach;
    }
?>
