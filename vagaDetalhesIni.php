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

    <script src="navbar.js"></script>

    <div style="height: 100px; border-top: #bbbbbb solid 1px;">

        <br>
        <br>
    
        <a href="pesquisarVaga.php" class="botao-verde" style="font-size: 1.5em; margin-left: 100px;">Voltar</a>

    </div>

    <div style="padding: 0 20%;">
        <div style="margin-top: 30px;">
            
            <div style="width: 34%; float: left; height: 530px; border-radius: 25px; background-image: url('img/stock-market.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center;">
                
            </div>

            <div style="width: 63%; float: right;  margin-top: -50px;">
                
                <?php
                    include 'conexao.php';

                    $vaga = $_GET['vaga'];

                    $sql = "SELECT Conteudo from vagas where ID_vaga = '$vaga'"; 
                    $result = mysqli_query($mysqli,$sql);

                    while ($row = $result->fetch_assoc()) {
                    echo $row['Conteudo']."<br>";
                    }
                

                ?>



                <a href="estudanteLogar.html" class="botao-amarelo" id="myBtn2" style="float: right; font-size: 1.5em;">Aplicar-se</a>
            </div>
            
        </div>

    </div>

    <div style="height: 110px; padding: 0 20%;">
        <!--Modal aplicar-se -->
        <div id="myModalA" class="modalA">
            <div class="modal-contentA" style="text-align:center; padding-top: 40px;padding-bottom: 40px;">
                <span class="closeA">&times;</span>
                <h1>Olá</h1>
            </div>
        </div>
    </div>

    <script src="footer.js "></script>

</body>

<script src="cadastro.js"></script>

</html>