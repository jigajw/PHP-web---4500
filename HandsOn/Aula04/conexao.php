<?php

$host = "localhost";
$port = "5432";
$dbname = "aula04";
$user = "jacson";
$password = "123";


$connection_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password}";

$con= pg_connect($connection_string);

var_dump($con);

// pg_close($con);

echo "<hr>";


$query = "INSERT INTO tb_alunos(nome, email, senha, cpd, rg) 
	       VALUES ('JACSON', 'JACSON@GMAIL.COM', '123', '12345684', '159753654')";

pg_query ($con, $query);