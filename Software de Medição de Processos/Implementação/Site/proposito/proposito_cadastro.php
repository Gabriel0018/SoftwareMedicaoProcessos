<?php

    if(isset($_POST['submit'])){

        include_once('conexao.php');

        $descricao = $_POST['descricao'];

        $result = mysqli_query($conexao, "INSERT INTO proposito(descricao) VALUES('$descricao')");

        header('Location: proposito.php');
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="icon/sigaa.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
    <title>Propósito</title>
</head>
<body>
    <main>
        <div class="principal">
            <div class="cabecalho_ufrrj">
                <p>UFRRJ - Universidade Federal Rural do Rio de Janeiro</p>
            </div>

            <div class="microespacocabecalho"></div>

            <div class="cabecalho">
                <p>Propósito</p>
            </div>
            <br>
            <form action="proposito_cadastro.php" method="POST" id="form" style="background-color:#F9FBFD;">
                <fieldset>
                    <legend style="text-align: center;"><strong>Novo Propósito</strong></legend><br>
                    
                    <div class="normal" style="text-indent: 106px">
                        <label for="nome">Propósito:</label>
                        <input type="text" name="descricao" id="descricao" class="input_user" maxlength="1024" minlength="3" required>
                        <span class="textoAviso">Deve conter no mínimo 3 caracteres e máximo 1024</span>
                    </div>
                    <div class="microespaco"></div>

                    <br>
                    <div class="centralizar">
                        <button class="btao-login"><a href="proposito.php" style="color:black">Cancelar</a></button>
                        <button type="submit" name="submit" id="submitButton" class="btao-login">Cadastrar</button></div>
            </form>
        </div>
    </main>
</body>
</html>