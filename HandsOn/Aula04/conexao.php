<?php

$host = "localhost";
$port = "5432";
$dbname = "aula04";
$user = "jacson";
$password = "123";

echo "<pre>";

$connection_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password}";

$con= pg_connect($connection_string);

var_dump($con);

// pg_close($con);

echo "<hr>";


// $query = "INSERT INTO tb_alunos(nome, email, senha, cpd, rg) 
// 	       VALUES ('JACSON', 'JACSON@GMAIL.COM', '123', '12345684', '159753654')";

// pg_query ($con, $query);

$resultado = pg_query("SELECT * FROM tb_alunos");

var_dump($resultado);

// $alunos = pg_fetch_all($resultado);
// $alunos1 = pg_fetch_array($resultado);
// $alunos2 = pg_fetch_assoc($resultado);


// var_dump($alunos);
// echo "<br>";
// echo "<hr>";

// var_dump($alunos1);
// echo "<br>";
// echo "<hr>";

// var_dump($alunos2);
// echo "<br>";
// echo "<hr>";

// foreach ($alunos as $aluno) {

// 	var_dump($aluno);
// 	# code...
// }

while ($row = pg_fetch_assoc($resultado)) {

	var_dump($row);
	# code...
}