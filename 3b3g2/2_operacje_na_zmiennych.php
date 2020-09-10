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
 echo $result;

 ?>
