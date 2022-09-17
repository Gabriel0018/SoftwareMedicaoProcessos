<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $dbname = "trabalho_andre";

    $conexao = mysqli_connect($servidor, $usuario, $senha, $dbname);

    if(!$conexao)
        die("Houve um erro ao conectar com o banco de dados!".mysqli_connect_error());

?>