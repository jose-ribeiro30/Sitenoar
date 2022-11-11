<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trivagas - Pesquisar Vaga</title>

    <link href="style.css" rel="stylesheet">
    <link href="cadastroModal.css" rel="stylesheet">
</head>
<body style="margin: 0;">

    <?php  

        include 'conexao.php';

    ?>
    <script src="navbar.js "></script>
    
    <div style="padding: 0 20%; border-top: #bbbbbb solid 1px;">
        <div style="padding: 0 10px; float: left; border: #bbbbbb solid 1px; border-radius: 10px; width: 30%; margin-top: 30px;">
            <h2 class="texto-amarelo"><span style="background: url(img/icons8-filtro-vazio-24.png) no-repeat;"></span> Filtro</h2>
            <hr>

            <p style="padding: 10px 0 0 0;">Cargo, Vaga ou Empresa</p>
            <input type="text" name="texto" id="1" class="input-text" placeholder="..."
            style="width: 90%;">

            <p style="padding: 10px 0 0 0;">Cidade</p>
            <select name="select" id="2" class="input-select" style="width: 98%;">
                <option value="1">Todas</option>
                <option value="2">Itapira</option>
                <option value="3">Outras</option>
            </select>

            <p style="padding: 10px 0 0 0;">Tipo de vaga</p>
            <select name="select" id="2" class="input-select" style="width: 98%;">
                <option value="1">Todos</option>
                <option value="1">Efetivo</option>
                <option value="2">Estágio</option>
            </select>

            <div style="padding: 20px 0 0 0;">
                <input type="checkbox" name="remoto" id="" title="remoto">
                <label for="remoto">Remoto</label>
            </div>

            <div style="display: flex; margin-top: 50px; padding: 0 10% 4%;">
                <a href="#" class="botao-outline-verde" id="myBtn" style="margin-right: 10px;">LIMPAR</a>
                <a href="#" class="botao-outline-azul" id="myBtn2" >BUSCAR</a>
            </div>
            
        </div>


        <div style="float: right; padding: 8% 10px; width: 63%; height: 100%; margin-top: -50px;">
            <p style="font-size: x-large; margin: 0 0 5px 0;">11 Vagas Encontradas</p>
            <div style="height: 200px; width: 100%; box-shadow: 1px 1px 4px #555555;  border-radius: 25px; float: left; padding: 10px 20px; margin-bottom: 10px">
                <div style="height: 130px; width:100%; overflow:hidden;">
            
                <?php  
                
                $sql = "SELECT Conteudo from vagas where ID_vaga = '1'"; 
                $result = mysqli_query($mysqli,$sql);

                while ($row = $result->fetch_assoc()) {
                    echo $row['Conteudo']."<br>";
                }                
                
                ?>
                </div>
                
            <a href="vagaDetalhesIni.php?vaga=1" class="botao-azul" id="myBtn" style="float: right; font-size: 1.5em;">Detalhes</a>
            </div>
            


            <div style="height: 200px; width: 100%; box-shadow: 1px 1px 4px #555555; border-radius: 25px; float: left; padding: 10px 20px; margin-bottom: 10px">
                <div style="height: 130px; width: 100%; overflow:hidden;">
            
                <?php  
                   
                $sql2 = "SELECT Conteudo from vagas where ID_vaga = '2'"; 
                $result2 = mysqli_query($mysqli,$sql2);
                
                while ($row = $result2->fetch_assoc()) {
                    echo $row['Conteudo']."<br>";
                }
                
                ?>
                </div>
              
            <a href="vagaDetalhesIni.php?vaga=2" class="botao-azul" id="myBtn" style="float: right; font-size: 1.5em;">Detalhes</a>
            </div>

            <div style="height: 200px; width: 100%; box-shadow: 1px 1px 4px #555555;  border-radius: 25px; float: left; padding: 10px 20px; margin-bottom: 10px">
                <div style="height: 130px; width:100%; overflow:hidden;">
            
                <?php  
                   
                $sql3 = "SELECT Conteudo from vagas where ID_vaga = '3' "; 
                $result3 = mysqli_query($mysqli,$sql3);

                while ($row = $result3->fetch_assoc()) {
                    echo $row['Conteudo']."<br>";
                }
                
                ?>
                </div>

            <a href="vagaDetalhesIni.php?vaga=3" class="botao-azul" id="myBtn" style="float: right; font-size: 1.5em;">Detalhes</a>
            </div>
            


        </div>
    </div>

    <div style="text-align: center; margin-bottom: 20px;">
        <table style="margin: 0 42%;">
            <tr>
                <td><a href="#" class="botao-outline-verde" style="font-size: small; font-weight: bold;"><</a></td>
                <td><a href="#" class="botao-verde" style="font-size: small; font-weight: bold;">1</a></td>
                <td><a href="#" class="botao-outline-verde" style="font-size: small; font-weight: bold;">2</a></td>
                <td><a href="#" class="botao-outline-verde" style="font-size: small; font-weight: bold;">3</a></td>
                <td><a href="#" class="botao-outline-verde" style="font-size: small; font-weight: bold;">></a></td>
            </tr>
            
            
        </table>
    </div>

    <script src="footer.js "></script>

</body>

<script src="cadastro.js"></script>

</html>