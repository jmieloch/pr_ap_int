<?php
//wersja PHP z jakiej korzystam
echo PHP_VERSION , '<br>'; //br musi byc w apostrofach
//echo phpinfo();

$pow = 2 ** 8; //256
echo $pow, '<br>'; //wyswietla

echo 'a','b','c'; //abc
echo '<br>';
echo 'a'.'b'.'c';//a+b+c => abc (woniejsze)

//operatory bitowe
//and &, or |, xor ^, not ~, <<, >>

 $x = 0b1010;
 echo "<hr>$x<br>";
 $x = $x << 2; //101000(2)=>8+32=40
 echo $x, '<br>';

 $x = $x >> 1; //101 => 16
 echo $x, '<br>';

 //porownanie <=>
 $x = 10;
 $y = 20;
 echo $x <=> $y, "<br>";
 $result = $x <=> $y;
 echo "$result<br>";

 $x=1;
 $y=1.0;

 if ($x==$y){
   echo 'Zmienne są równe<br>';
 }else {
   echo 'zmienne są różne<br>';
 }
echo gettype($x), '<br>'; //integer
echo gettype($y), '<br>';//double

####################################################################

/*
  preinkrementacja ++$x
  predekrementacja --$x
  postinkrementacja $x++
  postdekrementacja $x--
*/

$x=1;
$x=$x++;
echo $x, '<br>'; //1

$x=++$x;
echo $x, '<br>'; //2

$y=$x++;
echo $x, '<br>';//3
echo $y, '<br>';//2

$y=++$x*2-1;
echo $x, '<br>'; //4
echo $y, '<br>'; //7

$x=2;
echo $x++; //2
echo ++$x; //4
echo $x; //4
$y=$x++; //4
echo $y; //6
$y=++$x; //7
echo $y; //6
echo ++$y; //7

//operatory rzutowania
// bool, int, float, string, array, object, date_sunset

$test='123abc';
$test1=0;
$test2=20;

$x=(int)$test;
echo "<hr>$x<br>";
echo 'Typ danych $x: ', gettype($x), '<br>';
echo 'Typ danych $test: ', gettype($test), '<br>';

$x=(bool)$test1;
echo "<br>$x<br>";
echo 'Typ danych $x: ', gettype($x);


 ?>
