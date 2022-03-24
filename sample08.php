<?php
  date_default_timezone_set('Asia/Tokyo');

  // $time = strtotime('+1 day');
  // echo $time . '<br>';

  // $day = date('n/j(D)', $time);
  // echo $day . '<br>';
  

  for($i=0; $i<366; $i++):
    $time = strtotime("+$i day");
    $day = date('n/j(D)', $time);
    echo $day . '<br>';
  endfor;
?>
