<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trivagas - Vaga Detalhes</title>

    <link href="style.css" rel="stylesheet">
    <link href="cadastroModal.css" rel="stylesheet">
</head>

<body style="margin: 0;">

    <script src="navbarEsc.js"></script>

    <div style="height: 80px;border-top: #bbbbbb solid 1px;">

        <br>
        <br>
    
        <a href="fatecPerfil.php" class="botao-azul" style="font-size: 1.5em; margin-left: 100px;">Voltar</a>

    </div>
                

            <div style="padding: 0 20%; float: right;  margin-top: 50px; margin-bottom: 50px ;">
                

                <?php
                include 'conexao.php';

                

                $vaga = $_GET['visu'];
                $pesquisa ="SELECT ID_empresa from vagas where ID_vaga = '$vaga'";
                $empresa =  mysqli_query($mysqli,$pesquisa);


                $sql = "SELECT Conteudo from vagas where ID_vaga = '$vaga'"; 
                $result = mysqli_query($mysqli,$sql);
                
 


                while ($row = $result->fetch_assoc()) {
                echo $row['Conteudo']."<br>";
                }
               

                ?>
                <br>
                <br>
                    <a class="botao-azul" href="ajustarPagina.php?editar=<?php echo $vaga; ?>">Aprovar</a>  
                    <a class="botao-vermelho" href="processarDelete.php?delete=<?php echo $vaga; ?>">Deletar</a>

                
            </div>
    
    <div style=" bottom: 0; width: 100%;">
    <script src="footer.js "></script>
    </div>


</body>

<script src="cadastro.js"></script>

</html>