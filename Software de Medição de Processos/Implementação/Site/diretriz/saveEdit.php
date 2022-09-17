<?php
    include_once('conexao.php');

    if(isset($_POST['update'])){
        $id = $_POST['id'];
        $descricao = $_POST['descricao'];

        $sqlUpdate = "UPDATE diretriz SET descricao='$descricao' WHERE id='$id'";

        $result = $conexao->query($sqlUpdate);
    }
    header('Location: diretriz.php');
?>