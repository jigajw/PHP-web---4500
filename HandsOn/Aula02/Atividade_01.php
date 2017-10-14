<?php

echo "<pre>";


$numero = array ();
$Tamanho_array = 10;


for ($i= 0; $i < $Tamanho_array; $i ++){

	$numero [] = mt_rand(0,60);
	echo "O numero e: ".$numero[$i] ;
	echo "<br>";
	echo "<br>";

}

echo "<hr>";
var_dump($numero);

echo "<br>";
echo "<br>";
echo "<br>";
echo "<hr>";


for ($i=0; $i < $Tamanho_array ; $i++) { 
	
	echo $numero[$i].", ";
}
echo "<br>";
echo "<br>";
echo "<br>";

foreach ($numero as $key => $value) {
	# code...

	echo $key . " = " . $value , ", ";
}

echo "<br>";
echo "<br>";
echo "<br>";
echo "<hr>";

echo "Ultimo numero = " . $numero [$Tamanho_array - 1];

echo "<br>";
echo "<br>";
echo "<br>";
echo "<hr>";


foreach ($numero as $key => $value) {
	# code...
	if ($value % 2 == 0) {
		# code...
		echo "o valor da " . $key . " e par";
	}

	elseif ($value % 2 == 1) {
		# code...
		echo "o valor da " . $key . " e impar";
	}
echo "<br>";
}

echo "<br>";
echo "<br>";
echo "<br>";
echo "<hr>";


//saber qual numero e maior

$maior = $numero [0];
$menor = $numero [0];

for ($i=0; $i < $Tamanho_array; $i++) { 
	# code...

	if ($numero[$i] > $maior) {

		$maior = $numero[$i];		
		# code...
	}

	
		if ($numero[$i]< $menor) {

		$menor = $numero[$i];
		# code...
	}
}


echo "O maior numero e:" . $maior;
echo "<br>";
echo "O menor numero e:" . $menor;


echo "<br>";
echo "<br>";
echo "<br>";
echo "<hr>";

//$maior = $value;
//$menor = $value;

foreach ($numero as $key => $value) {
	# code...
	if ($value > $maior) {
		# code...
		$maior = $value;
	}

	if ($value < $menor) {
		# code...
		$maior = $value;
	}
}

echo "o numero menor e: ". $menor;
echo "<br>";
echo "o numero maior e: ". $maior;