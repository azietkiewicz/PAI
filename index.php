<?php
  $a = 1;
  $b = 1.0;
  echo gettype($a);
  echo gettype($b);

  echo $a === $b
    ? 'takie same'
    : 'różne';

  $x = 2;
  echo $x++; //2
  echo ++$x; //4
  echo $x; //4
  $y = $x++;
  echo $y; //4
  $y = ++$x;
  echo $y; //5
  echo ++$y; //6
?>
