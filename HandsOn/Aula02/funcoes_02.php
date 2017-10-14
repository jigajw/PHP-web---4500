<?php

echo "<pre>";


function Gerar_aleatorio ($Tamanho_num, $num1 = 0, $Num_aleatorio){

$numero = array ();

for ($i= 0; $i < $Tamanho_num; $i ++){

	$numero [] = mt_rand(0,$Num_aleatorio);
	echo "O numero e: ".$numero[$i] ;
	echo "<br>";
	echo "<br>";

}

}
 echo "<hr>";

echo Gerar_aleatorio (10,null, 19);

$array = Gerar_aleatorio (9, null, 85);
echo "<hr>";
$array2 = Gerar_aleatorio (15, 6 , 87);


var_dump($array);
echo "<hr>";
//var_dump($array2);

echo "<br>";
echo "<br>";
echo "<hr>";

$banco =[ 'Jacson', 'Wilian', 'Edson', 'Roger', 'Willian','Wilian', 'Jacson'];

$localizar = array_filter($banco, function ($info){

	if ($info == 'Wilian') {
		
		return $info ;
	}
});

var_dump($localizar);
