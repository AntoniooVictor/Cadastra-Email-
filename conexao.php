<?php 
	$server = 'localhost';
	$user = "root";
	$pass = "";
	$bd= "empresa";

	$conexao =  mysqli_connect($server, $user, $pass, $bd);

	if ($conexao === false) {

		echo "problema ao conectar no banco. Erro: ";
		echo mysqli_connect_errno() . ":" . mysqli_connect_errno();
		die;

	}

	
 ?>