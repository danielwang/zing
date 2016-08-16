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
    function showPatterns($path) {
      $folder = $path;
      $files = array();
      $handle=opendir($folder);
      while (false !== ($file = readdir($handle))):
          if(stristr($file,'.php')):
              $files[] = $file;
          endif;
      endwhile;
      
      sort($files);
      foreach ($files as $file):
          $filename = preg_replace("/\.php$/i", "", $file);
          $title = preg_replace("/\-/i", " ", $filename);
          $doc = ''.$path.'/'.$file;
          echo '<div class="row row-gap"><div class="col-sm-2">';
          echo '<h4>'.$title.'</h4>';
          echo '</div>';
          include($doc);
          echo '</div> <hr>';
      endforeach;
    }
?>


