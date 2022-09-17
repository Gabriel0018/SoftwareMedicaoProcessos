<?php

    if(!empty($_GET['id'])){

        include_once('conexao.php');

        $id = $_GET['id'];

        $sqlSelect = "SELECT * FROM objetivo WHERE id=$id";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0){
            while($user_data = mysqli_fetch_assoc($result)){
                $descricao = $user_data['descricao'];
                $nocao = $user_data['nocao'];
                $impacto = $user_data['impacto'];
                $fonte = $user_data['fonte'];
                $tipo = $user_data['tipo'];
                $formato = $user_data['formato'];
                $tipoidentificador = $user_data['tipoidentificador'];
                $modocalcular = $user_data['modocalcular'];
                $modoanalisar = $user_data['modoanalisar'];
            }
        }

        else{
            header('Location: objetivo.php');
        }
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
            <form action="saveEdit.php" method="POST" id="form" style="background-color:#F9FBFD;">
                <fieldset>
                    <legend style="text-align: center;"><strong>Novo Objetivo</strong></legend><br>
                    
                    <div class="normal" style="text-indent: 106px">
                        <label for="nome">Objetivo:</label>
                        <input type="text" value="<?php echo $descricao?>" name="descricao" id="descricao" class="input_user" maxlength="1024" minlength="3" required>
                        <span class="textoAviso">Deve conter no mínimo 3 caracteres e máximo 1024</span>
                    </div>
                    <div class="microespaco"></div>

                    <div class="normal" style="text-indent: 106px">
                        <label for="nome">Noção:</label>
                        <input type="text" value="<?php echo $nocao?>" name="nocao" id="nocao" class="input_user" maxlength="1024" minlength="3" required>
                        <span class="textoAviso">Deve conter no mínimo 3 caracteres e máximo 1024</span>
                    </div>
                    <div class="microespaco"></div>

                    <div class="normal" style="text-indent: 106px">
                        <label for="nome">Impacto:</label>
                        <input type="text" value="<?php echo $impacto?>" name="impacto" id="impacto" class="input_user" maxlength="1024" minlength="3" required>
                        <span class="textoAviso">Deve conter no mínimo 3 caracteres e máximo 1024</span>
                    </div>
                    <div class="microespaco"></div>

                    <div class="normal" style="text-indent: 106px">
                        <label for="nome">Fonte:</label>
                        <input type="text" value="<?php echo $fonte?>" name="fonte" id="fonte" class="input_user" maxlength="1024" minlength="3" required>
                        <span class="textoAviso">Deve conter no mínimo 3 caracteres e máximo 1024</span>
                    </div>
                    <div class="microespaco"></div>

                    <div class="normal" style="text-indent: 106px">
                        <label for="nome">Tipo:</label>
                        <input type="text" value="<?php echo $tipo?>" name="tipo" id="tipo" class="input_user" maxlength="1024" minlength="3" required>
                        <span class="textoAviso">Deve conter no mínimo 3 caracteres e máximo 1024</span>
                    </div>
                    <div class="microespaco"></div>

                    <div class="normal" style="text-indent: 106px">
                        <label for="nome">Formato:</label>
                        <input type="text" value="<?php echo $formato?>" name="formato" id="formato" class="input_user" maxlength="1024" minlength="3" required>
                        <span class="textoAviso">Deve conter no mínimo 3 caracteres e máximo 1024</span>
                    </div>
                    <div class="microespaco"></div>

                    <div class="normal" style="text-indent: 106px">
                        <label for="nome">Tipo de Identificador:</label>
                        <input type="text" value="<?php echo $tipoidentificador?>" name="tipoidentificador" id="tipoidentificador" class="input_user" maxlength="1024" minlength="3" required>
                        <span class="textoAviso">Deve conter no mínimo 3 caracteres e máximo 1024</span>
                    </div>
                    <div class="microespaco"></div>

                    <div class="normal" style="text-indent: 106px">
                        <label for="nome">Modo de Calcular:</label>
                        <input type="text" value="<?php echo $modocalcular?>" name="modocalcular" id="modocalcular" class="input_user" maxlength="1024" minlength="3" required>
                        <span class="textoAviso">Deve conter no mínimo 3 caracteres e máximo 1024</span>
                    </div>
                    <div class="microespaco"></div>

                    <div class="normal" style="text-indent: 106px">
                        <label for="nome">Modo de Analisar:</label>
                        <input type="text" value="<?php echo $nocao?>" name="modoanalisar" id="modoanalisar" class="input_user" maxlength="1024" minlength="3" required>
                        <span class="textoAviso">Deve conter no mínimo 3 caracteres e máximo 1024</span>
                    </div>
                    <div class="microespaco"></div>

                    <br>
                    <div class="centralizar">
                        <input type="hidden" name="id" value="<?php echo $id?>">
                        <button class="btao-login"><a href="objetivo.php" style="color:black">Cancelar</a></button>
                        <button type="submit" name="update" id="update" class="btao-login">Cadastrar</button></div>
            </form>
        </div>
    </main>
</body>
</html>