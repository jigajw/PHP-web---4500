<?php


echo "<pre>";


$senha = '123456';
$senha2 = '123456';

echo "senha MD5";
echo "<br>";

echo md5($senha);
echo "<br>";
echo md5($senha);
echo "<br>";


echo "<hr>";

echo "senha shA1";
echo "<br>";
echo hash('sha1', $senha);

