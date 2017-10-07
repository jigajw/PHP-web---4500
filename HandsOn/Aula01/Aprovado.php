<?php

//Condi;áo Aprovado -> Nota >= 7 && Frenquencia >=8;


//Condicao Recuperacao  -> Nota = 5 && frequencia > = 8


//condicao Reprovado -> Nota <5 OR frequencia <8

$nota = 7;

$frequencia = 8;

if ($nota >=5 && $frequencia >= 8){
	echo "Aprovado";
} elseif ($nota>= 5 && nota <7 && $frequencia >=8) {
	echo "Recuperacao";
	# code...
} elseif ($nota < 5 || $frequencia <8) {
	echo "Reprovado";
	# code...
}