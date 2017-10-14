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
echo lcfirst ($string);

echo "<br>";
echo "<br>";
echo "<br>";
echo "<hr>";

$string = 'Ola mundo';
echo ucfirst($string);

echo "<br>";
echo "<br>";
echo "<br>";
echo "<hr>";

//$nomes = 'jiga', 'jacson', 'wilian', 'Damasio';
//$nomes = explode(',', $nomes)
//var_dump($nomes);

//echo "<br>";
//echo "<br>";
//$nomes = array('jiga','wilian', 'jacson', 'damasio';
//$nomes = implode(',', $nomes)

echo "<br>";
echo "<br>";
echo "<br>";
echo "<hr>";

echo str_replace("@",10);

echo "<br>";
echo "<br>";
echo "<br>";
echo "<hr>";


//str_pad prenche os espaco em branco

$texto = "Mundo fantastico";
var_dump(str_pad($texto, 20 ));
var_dump(str_pad($texto, 20,'@'));
var_dump(str_pad($texto, 20,'@',STR_PAD_LEFT));
var_dump(str_pad($texto, 20, '@',STR_PAD_BOTH));


echo "<br>";
echo "<br>";
echo "<br>";
echo "<hr>";

$string = '    Lucas Cesar Marques';
echo strlen(trim($string));


echo "<br>";
echo "<br>";
echo "<br>";
echo "<hr>";


//STRPOS serve para localizar um string 
$string = '0123456789';

$procurar = '3';


$pos = strpos($string, $procurar);


if ($pos === false) {
	echo "A string $procurar náo foi encontrada";

		# code...
}else {

	echo "A string $procurar foi encontrada na posicao $pos";
}

echo "<br>";
echo "<br>";
echo "<br>";
echo "<hr>";



//STRRPOS serve para localizar a ultima  vez que aparece
$string = '0123456789';

$procurar = '3';


$pos = strrpos($string, $procurar);


if ($pos === false) {
	echo "A string $procurar náo foi encontrada";

		# code...
}else {

	echo "A string $procurar foi encontrada na posicao $pos";
}

echo "<br>";
echo "<br>";
echo "<br>";
echo "<hr>";


//SERVE PARA LOCALIZAR CARACTERES
$string = 'DAasdfasldkASDF';
$procurar= 'b';


$pos = stripos($string, $procurar);


if ($pos === falase) {
	echo "A string $procurar nao foi encontrada";
	# code...
}else {
	echo "A string $procurar foi encontrada na posicao $pos";
}