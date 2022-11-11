<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trivagas - Estudante Inicial</title>

    <link href="style.css" rel="stylesheet">
    <link href="cadastroModal.css" rel="stylesheet">
</head>
<body style="margin: 0">
    
    <script src="navbarEstu.js"></script>

    <div class="background-amarelo-claro"
        style="height: 300px; padding-top: 150px; background-image: url('img/fundo.jpg'); background-repeat: repeat; background-size: contain; background-position-x: center; background-position-y: 300px">

        <!--img src="img/pexels-photo-3184360.jpeg" alt="" style="float: left;"-->

        <input type="text" name="texto" id="1" class="input-text" placeholder="Pesquise por cargo, vaga ou empresa"
            style="margin-left: 20%; width: 50%; float: left;">
        <a href="pesquisarVaga2.html" class="botao-azul" style="font-size: 1.3em; float: left;">PESQUISAR</a>
    </div>
        
    <div style="height: 70px;">
        <div style="float: left; width: 100%;">
            <h2 class="texto-azul" style="text-align:center">Principais Vagas</h2>  
        </div>
    </div>

    <div style= "display: flex;height: 480px;justify-content: space-between; padding: 0 10%;">
    
<!-- vagas nos cards -->

    
    <div style="height: 400px; width: 300px; box-shadow: 2px 2px 5px #555555; border-radius: 25px; float: left; padding: 10px 20px; margin-right: 2%;">
            <div style="height: 300px;overflow:hidden;">
    <?php  
                include 'conexao.php';

                $sql = "SELECT Conteudo from vagas where ID_vaga = '1'"; 
                $result = mysqli_query($mysqli,$sql);

                while ($row = $result->fetch_assoc()) {
                    echo $row['Conteudo']."<br>";
                }
                
                ?>
            </div>

    <a href="vagaDetalhes.php?vaga=1" class="botao-azul" id="myBtn" style="float: right;margin-top: 5%; font-size: 1.5em;">Detalhes</a>
        </div>

    
    
    <div style="height: 400px; width: 300px; box-shadow: 2px 2px 5px #555555; border-radius: 25px; float: left; padding: 10px 20px; margin-right: 2%;">
            <div style="height: 300px;overflow:hidden;">
    <?php  

                $sql2 = "SELECT Conteudo from vagas where ID_vaga = '2'"; 
                $result2 = mysqli_query($mysqli,$sql2);

                while ($row = $result2->fetch_assoc()) {
                    echo $row['Conteudo']."<br>";
                }
                
                ?>
            </div>

    <a href="vagaDetalhes.php?vaga=2" class="botao-azul" id="myBtn" style="float: right;margin-top: 5%;  font-size: 1.5em;">Detalhes</a>
        </div>

        
    <div style="height: 400px; width: 300px; box-shadow: 2px 2px 5px #555555; border-radius: 25px; float: left; padding: 10px 20px; margin-right: 2%;">
                <div style="height: 300px;overflow:hidden;">
    <?php  

                $sql3 = "SELECT Conteudo from vagas where ID_vaga = '3'"; 
                $result3 = mysqli_query($mysqli,$sql3);

                while ($row = $result3->fetch_assoc()) {
                    echo $row['Conteudo']."<br>";
                }
                
                ?>

                </div>

    <a href="vagaDetalhes.php?vaga=3" class="botao-azul" id="myBtn" style="float: right;margin-top: 5%;  font-size: 1.5em;">Detalhes</a>
        </div>










    </div>





    <!-- Final do site -->

    <script src="footer.js "></script>

</body>

<script src="cadastro.js"></script>

</html>