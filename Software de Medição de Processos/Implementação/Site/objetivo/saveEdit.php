<?php
    include_once('conexao.php');

    if(isset($_POST['update'])){
        $id = $_POST['id'];
        $descricao = $_POST['descricao'];
        $nocao = $_POST['nocao'];
        $impacto = $_POST['impacto'];
        $fonte = $_POST['fonte'];
        $tipo = $_POST['tipo'];
        $formato = $_POST['formato'];
        $tipoidentificador = $_POST['tipoidentificador'];
        $modocalcular = $_POST['modocalcular'];
        $modoanalisar = $_POST['modoanalisar'];

        $sqlUpdate = "UPDATE objetivo SET descricao='$descricao' WHERE id='$id'";
        $sqlUpdate = "UPDATE objetivo SET descricao='$nocao' WHERE id='$id'";
        $sqlUpdate = "UPDATE objetivo SET descricao='$impacto' WHERE id='$id'";
        $sqlUpdate = "UPDATE objetivo SET descricao='$fonte' WHERE id='$id'";
        $sqlUpdate = "UPDATE objetivo SET descricao='$tipo' WHERE id='$id'";
        $sqlUpdate = "UPDATE objetivo SET descricao='$formato' WHERE id='$id'";
        $sqlUpdate = "UPDATE objetivo SET descricao='$tipoidentificador' WHERE id='$id'";
        $sqlUpdate = "UPDATE objetivo SET descricao='$modocalcular' WHERE id='$id'";
        $sqlUpdate = "UPDATE objetivo SET descricao='$modoanalisar' WHERE id='$id'";
        
        $result = $conexao->query($sqlUpdate);
    }
    header('Location: diretriz.php');
?>