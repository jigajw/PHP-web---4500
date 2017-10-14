<?php


echo "<pre>";


function cubo ($num){

	return $num *$num *$num;

}

$a = array(1, 2,  3, 4, 5);
$b = array_map('cubo', $a);

var_dump($b);
echo "<br>";

print_r($b);

echo "<br>";
echo "<br>";
echo "<hr>";

//funcao par
function par ($num){

	if ($num % 2 == 0) {

		return $num;
		# code...
	}
}

//funcao impar

function impar ($num){

	if ($num % 2 != 0) {

		return $num;
		# code...
	}
}

//filtrando ARRAY utilizando funcao em filtro
$vetor = [6,7,8,9,10,12,13];

echo "Impares: \n";

print_r(array_filter($vetor,'impar'));

echo "Pares: \n";

print_r(array_filter($vetor,'par'));

echo "<br>";
echo "<br>";
echo "<hr>";

//ARRAY_COMBINE serve para combinar dois ARRAY
$chaves = array(1,2,3);
$valores = array('um','dois', 'tres');

$vetor = array_combine($valores, $chaves);

print_r($vetor);


echo "<br>";
echo "<br>";
echo "<hr>";

//ARRAY_DIFF mostra a diferenteca entre dois ARRAY
$nums1 = [1,2,3];
$num2 = [3,4,5];

$dif = array_diff($nums1, $num2);

print_r($dif);

echo "<br>";
echo "<br>";
echo "<hr>";

$array1 = ['a', 'b', 'cor' => 'verde'];

print_r($array1);

$array2 = ['cor'=> 'azul','d', 'xadrez'];

print_r($array2);

print_r(array_merge($array1,$array2));


echo "<br>";
echo "<br>";
echo "<hr>";

$vetor = array_fill(8, 15, 'PHP');

print_r($vetor);
?>
