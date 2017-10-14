<?php

echo "<pre>";


function Par_Or_Imp($num){

	if ($num % 2 == 0) {
		
		return "Par";
	}

	else {

		return "Inpar" ;
	}
}

echo Par_Or_Imp(4);


echo "<br>";
echo "<br>";
echo "<br>";
echo "<hr>";


function IsMaior ($num1, $nun2){

	$maior;

	if ($num1 > $nun2) {

		$maior= $num1;
		# code...
	} elseif ($nun2 > $num1) {
		$maior= $nun2;
		# code...
	}else {

		$maior= "Iguais";
		# code...
	}
	return $maior;
}

echo IsMaior (8,15);