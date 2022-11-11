<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trivagas - FATEC Logar</title>

    <link href="style.css" rel="stylesheet">
    <link href="cadastroModal.css" rel="stylesheet">
</head>

<body style="margin: 0">

    <script src="navbar.js "></script>
    
    <div  style="height: 100px;">

        <br>
        <br>
    
        <a href="index.html" class="botao-cinza" style="font-size: 1.5em; margin-left: 100px;">Voltar</a>

    </div>


    <div style="height: 500px;">
    
        <div class="loginFatec">
            
            <h3 style="color: #000000; text-align: center;">PREENCHA ABAIXO PARA REALIZAR LOGIN NO SITE</h3>

            <h4 style="color: #000000; text-align: center;">FATEC</h4>

            <form action="processoLoginFatec.php" method="POST">

            <label style="color: #000000;font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; margin-left: 10%;">Usuário:</label>
            
            <br>

            <input type="text" name="login" class="input-text" style="margin-top: 5px;margin-left: 10%; width: 70%;" placeholder="">

            <br>
            <br>

            <label style="color: #000000;font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; margin-left: 10%;">Senha:</label>
            
            <br>

            <input type="password" name="senha" class="input-text" style="margin-top: 5px;margin-left: 10%; width: 70%;" >
            
            <br>
            <br>
            <br>
            
            <input type="submit" name="enviar" class="botao-verde" style="font-size: 1.5em;margin-left: 38%;" value="LOGAR">

            </form>

        </div>

    </div>

    <?php
    if(isset($_REQUEST["err"]))
	$msg="Usuário invalido ou senha";
    ?>
    <p style="color:red;">
    <?php if(isset($msg))
    {
	
    echo "<script>alert('$msg');</script>";

    }
    ?>
    
    <script src="footer.js "></script>

</body>

<script src="cadastro.js"></script>

</html>