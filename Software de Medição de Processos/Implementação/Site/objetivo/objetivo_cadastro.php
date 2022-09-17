<?php

    if(isset($_POST['submit'])){

        include_once('conexao.php');

        $descricao = $_POST['descricao'];
        $nocao = $_POST['nocao'];
        $impacto = $_POST['impacto'];
        $fonte = $_POST['fonte'];
        $tipo = $_POST['tipo'];
        $formato = $_POST['formato'];
        $tipoidentificador = $_POST['tipoidentificador'];
        $modocalcular = $_POST['modocalcular'];
        $modoanalisar = $_POST['modoanalisar'];

        $result = mysqli_query($conexao, "INSERT INTO objetivo(descricao,nocao,impacto,fonte,tipo,formato,tipoidentificador,modocalcular,modoanalisar) VALUES('$descricao','$nocao','$impacto','$fonte','$tipo','$formato','$tipoidentificador','$modocalcular','$modonalisar')");

        header('Location: objetivo.php');
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
    <title>Objetivo</title>
</head>
<body>
    <main>
        <div class="principal">
            <div class="cabecalho_ufrrj">
                <p>UFRRJ - Universidade Federal Rural do Rio de Janeiro</p>
            </div>

            <div class="microespacocabecalho"></div>

            <div class="cabecalho">
                <p>Objetivo</p>
            </div>
            <br>
            <form action="objetivo_cadastro.php" method="POST" id="form" style="background-color:#F9FBFD;">
                <fieldset>
                    <legend style="text-align: center;"><strong>Objetivo</strong></legend><br>
                    
                    <div class="normal" style="text-indent: 106px">
                        <label for="nome">Objetivo:</label>
                        <input type="text" name="descricao" id="descricao" class="input_user" maxlength="1024" minlength="3" required>
                        <span class="textoAviso">Deve conter no mínimo 3 caracteres e máximo 1024</span>
                    </div>
                    <div class="microespaco"></div>

                    <div class="normal" style="text-indent: 106px">
                        <label for="nome">Nocao:</label>
                        <input type="text" name="nocao" id="nocao" class="input_user" maxlength="1024" minlength="3" required>
                        <span class="textoAviso">Deve conter no mínimo 3 caracteres e máximo 1024</span>
                    </div>
                    <div class="microespaco"></div>

                    <div class="normal" style="text-indent: 106px">
                        <label for="nome">Impacto:</label>
                        <input type="text" name="impacto" id="impacto" class="input_user" maxlength="1024" minlength="3" required>
                        <span class="textoAviso">Deve conter no mínimo 3 caracteres e máximo 1024</span>
                    </div>
                    <div class="microespaco"></div>

                    <div class="normal" style="text-indent: 106px">
                        <label for="nome">Fonte:</label>
                        <input type="text" name="fonte" id="fonte" class="input_user" maxlength="1024" minlength="3" required>
                        <span class="textoAviso">Deve conter no mínimo 3 caracteres e máximo 1024</span>
                    </div>
                    <div class="microespaco"></div>

                    <div class="normal" style="text-indent: 106px">
                        <label for="nome">Tipo:</label>
                        <input type="text" name="tipo" id="tipo" class="input_user" maxlength="1024" minlength="3" required>
                        <span class="textoAviso">Deve conter no mínimo 3 caracteres e máximo 1024</span>
                    </div>
                    <div class="microespaco"></div>

                    <div class="normal" style="text-indent: 106px">
                        <label for="nome">Formato:</label>
                        <input type="text" name="formato" id="formato" class="input_user" maxlength="1024" minlength="3" required>
                        <span class="textoAviso">Deve conter no mínimo 3 caracteres e máximo 1024</span>
                    </div>
                    <div class="microespaco"></div>

                    <div class="normal" style="text-indent: 106px">
                        <label for="nome">Tipo de Identificador:</label>
                        <input type="text" name="tipoidentificador" id="tipoidentificador" class="input_user" maxlength="1024" minlength="3" required>
                        <span class="textoAviso">Deve conter no mínimo 3 caracteres e máximo 1024</span>
                    </div>
                    <div class="microespaco"></div>

                    <div class="normal" style="text-indent: 106px">
                        <label for="nome">Modo de Calcular:</label>
                        <input type="text" name="modocalcular" id="modocalcular" class="input_user" maxlength="1024" minlength="3" required>
                        <span class="textoAviso">Deve conter no mínimo 3 caracteres e máximo 1024</span>
                    </div>
                    <div class="microespaco"></div>

                    <div class="normal" style="text-indent: 106px">
                        <label for="nome">Modo de Analisar:</label>
                        <input type="text" name="modoanalisar" id="modoanalisar" class="input_user" maxlength="1024" minlength="3" required>
                        <span class="textoAviso">Deve conter no mínimo 3 caracteres e máximo 1024</span>
                    </div>
                    <div class="microespaco"></div>

                    <br>
                    <div class="centralizar">
                        <button class="btao-login"><a href="objetivo.php" style="color:black">Cancelar</a></button>
                        <button type="submit" name="submit" id="submitButton" class="btao-login">Cadastrar</button></div>
            </form>
        </div>
    </main>
</body>
</html>