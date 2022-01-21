<?php
require_once('conexao.php');

if(isset($_POST['email'])){

    $email = $_POST['email'];

    $resultadoo = mysqli_query($conexao, "SELECT `email` FROM `cliente` WHERE email='$email'");

    $email_contagem = mysqli_num_rows($resultadoo);

    if($email_contagem){

        die('<font color="red"> Este email já está cadastrado!');     
    } else {
        die('<font color="green"> Email válido');
    }
}
?>