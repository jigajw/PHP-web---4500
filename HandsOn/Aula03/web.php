<?php

echo "<pre>";


// header('Location: http://www.google.com.br');

$_GET ['nome'] = 'Jiga';
$_POST [ 'nome'] = 'Jacson Wilian';
var_dump($_GET);
var_dump($_POST);
// var_dump($_REQUEST);

//tudo que tiver na url depois de ?chave=valor&chave=valor


session_start();

$_SESSION['logado'] = true;

var_dump($_SESSION);

setcookie("Nome", "Jacson");

var_dump($_COOKIE ['Nome']);

var_dump($_SERVER);

