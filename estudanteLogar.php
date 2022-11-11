<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trivagas - Estudante Logar</title>

    <link href="style.css" rel="stylesheet">

    <link href="cadastroModal.css" rel="stylesheet">
</head>
<body style="margin: 0">

    <script src="navbar.js "></script>

    <div class="background-azul" style="height: 100px;">

        <br>
        <br>
    
        <a href="index.html" class="botao-cinza" style="font-size: 1.5em; margin-left: 100px;">Voltar</a>

    </div>

    <div style="height: 490px;">
    
        <div class="loginEstudante" >

            <h3 style="color: #000000; text-align: center;font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">PREENCHA ABAIXO PARA FAZER LOGIN NO SITE</h3>
            <form action="processoLoginEstudante.php" method="POST">
            <h4 style="color: #000000; text-align: center;font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">ESTUDANTE</h4>

            <label style="color: #000000;font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; margin-left: 10%;">Email:</label>
            
            <br>

            <input name="email" type="text" class="input-text" style="margin-top: 5px;margin-left: 10%; width: 70%;" placeholder="">

            <br>
            <br>

            <label style="color: #000000;font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; margin-left: 10%;">Senha:</label>
            
            <br>

            <input name="senha" type="password" class="input-text" style="margin-top: 5px;margin-left: 10%; width: 70%;" >
            
            <br>
            <br>
            <br>
            <br>
            
            <input name="enviar" href="estudanteInicial.php" class="botao-verde" type="submit" style="font-size: 1.5em;margin-left: 38%;" value="LOGAR">
            </form>
        </div>

    </div>

    <?php
    if(isset($_REQUEST["err"]))
	$msg="Invalid username or Password";
    ?>
    <p style="color:red;">
    <?php if(isset($msg))
    {
	
    echo "<script>alert('$msg');</script>";

    }
    ?>

    <script src="footer.js"></script>
    
</body>

<script src="cadastro.js"></script>
    
</html>
