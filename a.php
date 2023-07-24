#!/usr/bin/php
<?php 
  foreach(file('/usr/share/dict/words') as $line){
    //xyを含む単語を表示し、かつ()!==falseとすることで、xyを頭にもつ単語も漏れなく表示できるようにした。
    if(strpos($line, "xy")!== false ){
      echo "$line";
    }
  } 
?>
