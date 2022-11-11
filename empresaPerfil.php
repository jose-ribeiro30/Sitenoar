<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StarJobs - Empresa Perfil</title>

    <link href="style.css" rel="stylesheet">
</head>

<body style="margin: 0">

<?php
session_start ();
if(!isset($_SESSION["login"])){
    header("location:empresaLogin.php");
}
    include ('conexao.php');
    $id = $_SESSION["login"];

?>

    <script src="navbarEmp.js"></script>

    <div class="background-cinza" style="height: 100px; border-bottom: black; padding: 0 45%;">
        <img src="img/empresa.png" alt="estudante" height="100px">
    </div>

    <div style="height: 450px;border-bottom: 5px  groove black;">
        
        <div  style="padding: 30px 18%;">
            
            <div style="width: 204px; float: left; padding-top: 15px;">
                <img src="img/icons8-person-100.png" alt="imagem" height="200px"
                    style="background-color: #DDDDDD; border: 5px groove #555555; border-radius: 20px; margin-bottom: 15px;">
                <a href="#" class="botao-outline-amarelo" style="margin-left: 20%;">Alterar Logo</a>
            </div>

            <div style="float: left; padding-left: 10px; width: 75%;">
                <div style="float: left; padding-right: 10px; width: 70%;">
                    <p>Email:</p>
                    <input type="text" class="input-text" placeholder="exemplo@email.com" style="width: 95%;">
                </div>

                <div style="float: left; margin-right: 20px; width: 26%;">
                    <p>Telefone:</p>
                    <input type="text" class="input-text"  style="width: 88%;">
                </div>

                <div style="float: left; padding-right: 10px; width: 45%;">
                    <p>Ramo de atividade:</p>
                    <input type="text" class="input-text" style="width: 92%;">
                </div>

                <div style="float: left; margin-right: 20px; width: 23%;">
                    <p>CEP:</p>
                    <input type="text" class="input-text" style="width: 90%;">
                </div>

                <div style="float: left; width: 23%;margin-right: 30px">
                    <p>Logradouro:</p>
                    <input type="text" class="input-text"  style="width: 94%;">
                </div>

                <div style="float: left; padding-right: 20px; width: 41%;">
                    <p>Bairro:</p>
                    <input type="text" class="input-text" style="width: 94%;">
                </div>

                <div style="float: left; margin-right: 20px; width: 25%;">
                    <p>Número:</p>
                    <input type="text" class="input-text" style="width: 90%;">
                </div>

                <div style="float: left; width: 25%;">
                    <p>Complemento:</p>
                    <input type="text" class="input-text" style="width: 90%;">
                </div>
                
                <div style="float:right; height: 100px; text-align: right; padding-top: 10%;">
                    <a href="#" class="botao-azul" style="font-size: large; margin-right: 15px;">Cancelar</a>
                    <a href="#" class="botao-outline-azul" style="font-size: larger;">Salvar</a>
                </div>
            </div>
            
        </div>
    </div>

    <div class="background-vermelho" style="height: 80px;padding: 1px;border-bottom: 5px groove black;text-align: center;">
    
        <h1 style="color: white">Suas Vagas</h1>

    </div>

    <?php  
                
                $sql = "SELECT ID_vaga, Conteudo from vagas where ID_empresa = '$id'"; 
                $result = $mysqli->query($sql);

                $sql2 = $mysqli->query("SELECT Id_vaga from vagas where ID_empresa = '$id'");
                $result2= mysqli_fetch_array($sql2);

                
                $_SESSION['idVaga'] = intval($result2[0]);


                    function custom_echo($x, $length)
                    {
                        if(strlen($x)<=$length)
                        {
                            echo $x;
                        }
                        else
                        {
                            $y=substr($x,0,$length) . '...';
                            echo $y;
                        }
                    }
   
            ?>

    <div style="background-color: #999999;display: flex;height: adjust;padding: 1% 8% ">

            <div style="margin-right: 10px ; width: 100%;background-color: white; box-shadow: 1px 1px 4px #555555; border-radius: 25px; float: top; padding: 10px 20px; margin: 10px">
                <div>
                <table>
                    <thead>
                        <tr>
                        <th>
                        </th>
                        </tr>
                    </thead>
                    <?php  while ($row = $result->fetch_assoc()){ ?>
                        <tr>
                            
                            <td> <?php custom_echo($row['Conteudo'], 200); ?></td>
                            <td> <a class="botao-verde" href="vagaDetalhesEmpVisu.php?visu=<?php echo $row['ID_vaga']?>" >Visualizar</a>
                                 <a class="botao-azul" href="ajustarPagina.php?editar=<?php echo $row['ID_vaga']; ?>">Editar</a>  
                                 <a class="botao-vermelho" href="processarDelete.php?delete=<?php echo $row['ID_vaga']; ?>">Deletar</a>
                                 
                            </td>
                            
                        </tr>
                        <?php  } ?>
                </table>
               
                </div>
                <br>
            </div>

        
    </div>

    <div style= "background-color: #999999;height: 80px;padding: 0 10%;">
    
        <a href="empresaCadastroVaga.html" class="botao-outline-amarelo" id="myBtn2" style="font-size: 1.2em;">CADASTRAR VAGA</a>
    
    </div>

    <script src="footer.js "></script>

</body>

</html>