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

    <script src="navbarEstu.js"></script>

    <div style="height: 100px; border-top: #bbbbbb solid 1px;">

        <br>
        <br>
    
        <a href="estudanteInicial.php" class="botao-verde" style="font-size: 1.5em; margin-left: 100px;">Voltar</a>

    </div>

    <div style="padding: 0 20%;">
        <div style="margin-top: 30px;">
            
            <div style="width: 34%; float: left; height: 530px; border-radius: 25px; background-image: url('img/stock-market.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center;">
                
            </div>

            <div style="width: 63%; float: right;  margin-top: -50px;">
                

                <?php
                include 'conexao.php';

                

                $vaga = $_GET['vaga'];
                $pesquisa ="SELECT ID_empresa from vagas where ID_vaga = '$vaga'";
                $empresa =  mysqli_query($mysqli,$pesquisa);


                $sql = "SELECT Conteudo from vagas where ID_vaga = '$vaga'"; 
                $result = mysqli_query($mysqli,$sql);
                
                session_start();
                $_SESSION['vaga']= $vaga;
                $_SESSION['empresa']= $empresa;

                while ($row = $result->fetch_assoc()) {
                echo $row['Conteudo']."<br>";
                }
               

                ?>
                
                <a  href="estudanteAplicarVaga.php" class="botao-amarelo" id="myBtn2" style="float: right; font-size: 1.5em;">Aplicar-se</a>
            </div>
            
        </div>

    </div>

    <div style="height: 110px; padding: 0 20%;">
        
    </div>

    <script src="footer.js "></script>

</body>

<script src="cadastro.js"></script>

</html>