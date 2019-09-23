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

  echo '<br><br>';

  $text = '123dssa';
  echo (int)$text;

  $text1 = 0;
  $text2 = 1;
  echo (bool)$text1, '<br>', (bool)$text2, '<br>';
  //(bool)0 to false (nic), wszystko inne to 1

  //operatory rzutowania: bool, int, float, string, array, object, unset (daje NULL)

  $c;
  echo $c;
  echo @$c;

  // @ <- operator pomijania błędów

  echo 'Wielkość zmiennej całowitej: ', PHP_INT_SIZE, '<br>';
  // echo phpinfo();

   $v = 10;
   echo is_string($v);
   echo is_int($v);
   echo is_bool($v);
   echo is_float($v);
   echo is_null($v);

   echo '<hr>';

  ////////////////////////////////
  // ZMIENNE SUPERGLOBALNE
  ////////////////////////////////

  # $_GET, $_POST, $_COOKIE, $_FILES, $_SESSION, $_SERVER;

  echo $_SERVER['SERVER_PORT'], '<BR>';
  echo $_SERVER['SERVER_NAME'], '<BR>';
  //ścieżka od htdocs
  echo $_SERVER['SCRIPT_NAME'], '<BR>';
  //ścieżka bezwzględna do htdocs
  echo $_SERVER['DOCUMENT_ROOT'], '<BR>';
  echo $_SERVER['SERVER_PROTOCOL'], '<BR>';

  $lokalizacjaPliku = $_SERVER['DOCUMENT_ROOT'].$_SERVER['SCRIPT_NAME'];
  echo $lokalizacjaPliku, '<HR>';

  ////////////////////////////////
  // STAŁE
  ////////////////////////////////

  define('NAZWISKO', 'Kowal');
  echo NAZWISKO;
?>
