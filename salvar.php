<?php 

$email = filter_input(INPUT_POST, 'email');

require_once('conexao.php');



$sql = "INSERT INTO  `cliente`
(`email`) VALUES 
('$email')";

$resultado = mysqli_query($conexao, $sql);

if ($resultado == true) {
  echo "Email cadastrado com sucesso";
} else {
  echo "Erro ao cadastrar";
}

?>

