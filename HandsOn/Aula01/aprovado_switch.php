<?php

//Condi;áo Aprovado -> Nota >= 7 && Frenquencia >=8;


//Condicao Recuperacao  -> Nota = 5 && frequencia > = 8


//condicao Reprovado -> Nota <5 OR frequencia <8

$nota = 4;

$frequencia = 8;

switch (true) {
	case ($nota >=5 && $frequencia >= 8):
		echo "Aprovado";# code...
		break;

	case ($nota>= 5 && nota <7 && $frequencia >=8):
		echo "Recuperacao";# code...
		break;

	case ($nota < 5 || $frequencia <8):
		# code...
		echo "Reprovado";
		break;

	default:
		# code...
		break;
}
