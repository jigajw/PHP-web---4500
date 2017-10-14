<?php

echo "<pre>";


$var = 0;

// EMPTY
// 0 . "0", FALSE, NULL -> Sao considerados vazios;

if (empty($var)) {

	echo "VAZIO";

}


echo "<hr>";

if (isset($var)) {
	echo "setda";
	# code...
}


if (!isset($nome)) {
	echo "nao setada";
	# code...
}

echo "<br>";

//IS_String;

$string = "texto aqui";

if (is_string($string)) {
	echo "e uma string";
	# code...
}


echo "<br>";
echo "<br>";
echo "<br>";
echo "<hr>";


//UNSET comando para apagar uma variavel completa

$variavel = "texto";
var_dump($variavel);
unset($variavel);

// VAR_DUMP serve para detalhar um variavel
var_dump($variavel);


echo "<br>";
echo "<br>";
echo "<br>";
echo "<hr>";




$artilheiro = "Ronaldo";

$gols = 19;


$texto = 'O artilheiro do campeonato, %s tem %d gols';
printf($texto, $artilheiro, $gols);


echo "<br>";
echo "<br>";
echo "<br>";
echo "<hr>";

//Comando STR_REPLACE TROCA UM VALOR DE UMA STRING POR OUTRO
$string = 'oi mundo, 01, oi';

$novaString = str_replace('oi', 'Tchau', $string);


echo "<br>";
echo "<br>";
echo "<br>";
echo "<hr>";


//TRIM serve para remover espaco no comeco e final


$string = '      PHP      ';
var_dump($string);
var_dump(trim($string));


echo "<br>";
echo "<br>";
echo "<br>";
echo "<hr>";

//pega o primeiro caractere e transforma em maisculo
$string = 'Ola mundo';
echo ucfirst($string);

echo "<br>";
echo "<br>";
echo "<br>";
echo "<hr>";

//
$string = 'Ola mundo';
echo ucwords($string);

echo "<br>";
echo "<br>";
echo "<br>";
echo "<hr>";

//
$string = 'Ola mundo';
echo lcfirst $string);

echo "<br>";
echo "<br>";
echo "<br>";
echo "<hr>";