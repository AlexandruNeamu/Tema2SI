<?php
  echo '<pre>';
  if ($file = fopen("out.txt", "r")) {
     while(!feof($file)) {
         $line = fgets($file);
         echo $line;
     }
     fclose($file);
  echo '</pre>';
    }
?>