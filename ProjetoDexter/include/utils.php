<?php
		
function verificaPagina($pagina){


	if (basename($_SERVER['PHP_SELF'])==$pagina) {

		return true;

	} 
	else {

		return false;
	}
}

function ValidaCampo ($_campo){

if ($_campo == '') {

	return false;
	
	# code...
}
return true;
}

if (isset($_POST['nome'])) {
	echo $_POST['nome'];
	# code...
}else {
	echo " ";
}











