<?php

echo "<pre>";

include_once 'dados.php';


function verificarUsuario($dados){

	if (!isset($dados['email'])) {
		return false;
		# code...
	}

	if (!isset($dados['senha'])) {
		return false;
		# code...
	}

foreach ($usuarios as $usuario) {

	
	# code...
}



}
	
