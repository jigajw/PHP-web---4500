<?php 


echo "<pre>";

//string
$num1 = '10';
$num2 = '4';
//inteiros
$num3 = 4;
$num4 = 10;

echo "<b>Falso \n \r</b>";
//falso
var_dump($num1 != $num4)  ;
echo '<br>';

var_dump($num1 < $num4)  ;
echo '<br>';

var_dump($num1 > $num4)  ;
echo '<br>';

var_dump($num2 === $num3)  ;
echo"<hr>";






echo "<b>Verdadeiro \n \r</b>";
//verdadeiro
var_dump($num2 == $num2)  ;
echo '<br>';

var_dump($num1 <= $num4)  ;
echo '<br>';

var_dump($num1 >= $num4)  ;
echo '<br>';

