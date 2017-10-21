<!DOCTYPE html>
<html>
<head>
	<title>	4Linux / Php-Web 500 </title>
</head>
<body>

<h1 style="" class = "">Meu Formulario:</h1>



<form action="processaForm.php" method="POST">

<p>
	<label>Nome:</label>
	<input type="text" placeholder = "Jacson Wilian Damasio" name="nome">
</p>

<p>	
	<label>Email:</label>
	<input type="text" placeholder= "email@email.com"name="email" >
</p>


<p>
	<label>Senha:</label>
	<input type="password" name="Senha" >

</p>

<input type="submit" name="Enviar">
	

</form>


<?php
if ($_POST) {

	if ($_POST['nome'] == '') {

		echo "Nome invalido <br>";
		# code...
	}

	// echo $_POST['nome'];

	// echo $_POST['email'];

	# code...
}
?>

</body>
</html>















