<?php

    if(!empty($_GET['id'])){

        include_once('conexao.php');

        $id = $_GET['id'];

        $sqlSelect = "SELECT * FROM proposito WHERE id=$id";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0){
            while($user_data = mysqli_fetch_assoc($result)){
                $descricao = $user_data['descricao'];
            }
        }

        else{
            header('Location: proposito.php');
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
            <form action="saveEdit.php" method="POST" id="form" style="background-color:#F9FBFD;">
                <fieldset>
                    <legend style="text-align: center;"><strong>Novo Propósito</strong></legend><br>
                    
                    <div class="normal" style="text-indent: 106px">
                        <label for="nome">Propósito:</label>
                        <input type="text" value="<?php echo $descricao?>" name="descricao" id="descricao" class="input_user" maxlength="1024" minlength="3" required>
                        <span class="textoAviso">Deve conter no mínimo 3 caracteres e máximo 1024</span>
                    </div>
                    <div class="microespaco"></div>

                    <br>
                    <div class="centralizar">
                        <input type="hidden" name="id" value="<?php echo $id?>">
                        <button class="btao-login"><a href="proposito.php" style="color:black">Cancelar</a></button>
                        <button type="submit" name="update" id="update" class="btao-login">Cadastrar</button></div>
            </form>
        </div>
    </main>
</body>
</html>