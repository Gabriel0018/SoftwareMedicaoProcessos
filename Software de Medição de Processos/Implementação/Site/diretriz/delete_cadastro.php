<?php

    if(!empty($_GET['id'])){

        include_once('conexao.php');

        $id = $_GET['id'];

        $sqlSelect = "SELECT * FROM diretriz WHERE id=$id";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0){
            $sqlDelete ="DELETE FROM diretriz WHERE id=$id";
            $resultDelete = $conexao->query($sqlDelete);
        }

        header('Location: diretriz.php');

    }
?>