<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StarJobs - Estudante Perfil</title>

    <link href="style.css" rel="stylesheet">
</head>

<body style="margin: 0">

    <script src="navbarEstu.js"></script>

    <div class="background-cinza" style="height: 100px; padding: 0 45%;">
        <img src="img/estudante.png" alt="estudante" height="100px">
    </div>
    <?php 
    session_start ();
    if(!isset($_SESSION["login"])){
        header("location:empresaLogin.php");
    }
        include ('conexao.php');
        $id = $_SESSION["login"];


        $perfil = $mysqli->query("SELECT * FROM aluno WHERE Id = '$id'");


    
    
    ?>

    <?php  while ($row = $perfil->fetch_assoc()){ ?>

        <?php   $_SESSION['Id'] = $row['Id']; ?>
    <div style="height: 520px;">
        
        <div style="padding: 70px 18%;">
            <div style="width: 204px; float: left; padding-top: 15px;">
                <img src="img/icons8-person-100.png" alt="imagem" height="200px"
                    style="background-color: #DDDDDD;  border: 5px groove #555555; border-radius: 15px; margin-bottom: 15px;">
                <a href="#" class="botao-outline-amarelo" style="margin-left: 14%;">Alterar Imagem</a>
            </div>
            <div style="float: left; padding-left: 10px; width: 75%;">
                <div>
                    <p>Nome Completo</p>
                    <input type="text" class="input-text" placeholder="<?php echo $row['Nome_completo']?>" style="width: 96%;" readonly>
                </div>

                <div style="float: left; padding-right: 10px;">
                    <p>CPF</p>
                    <input type="text" class="input-text" placeholder="<?php echo $row['CPF']?>" readonly>
                </div>

                <div style="float: left; padding-right: 10px;">
                    <p>RG</p>
                    <input type="text" class="input-text" placeholder="<?php echo $row['RG']?>"  readonly>
                </div>

                <div style="float: left;">
                    <p>Data de Nascimento</p>
                    <input type="date" class="input-text" style="width: 160px;"  value="<?php echo $row['data_nasc']?>" readonly>
                </div>

                <form action="atualizarCadastro.php" method="POST">

                <div style="float: left; padding-right: 10px; width: 50%;">
                    <p>Email</p>
                    <input name="email" type="text" class="input-text" placeholder="<?php echo $row['Email']?>" style="width: 92%;">
                </div>

                <div style="float: left; margin-right: 20px; width: 21%;">
                    <p>Celular</p>
                    <input name="telefone" type="text" class="input-text" placeholder="<?php echo $row['Telefone']?>" style="width: 88%;">
                </div>
                <?php } ?>
               
                
                <div style="float:right; height: 100px; text-align: right; padding-top: 10%;">
                    <input name="enviar" type="submit" href="atualizarcadastro.php" class="botao-verde" style="font-size: larger;" value="Salvar e Atualizar">
                </div>
            </div>
        </div>
    </div>

    <script src="footer.js"></script>

</body>

</html>