<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StarJobs - Fatec</title>
    
    <link href="style.css" rel="stylesheet">
</head>
<body style="margin: 0">

    <script src="navbarEsc.js"></script>

    <div class="background-vermelho" style="height: 100px; border-bottom: 1px solid black;border-top: 1px solid black; padding: 0 45%;">
        <img src="img/instituicao.png" alt="estudante" height="100px">
    </div>

    <div style="padding-top: 2%;padding-bottom: 5%;background-color: rgba(153, 37, 37, 0.8);">

        <h3 style="color: white;margin: 0 0 0 40%;">Vagas Aguardando aprovação</h3>
    
        <div style=" width: 60%;margin: 2% 0 0 20%;background-color: white;box-shadow: 1px 1px 4px #555555; border-radius: 25px;border-style: outset;border-color: #CCCDCC;">

                <?php
                session_start();
                if(!isset($_SESSION["login"])){
                    header("location:empresaLogin.php");
                }
                    include ('conexao.php');
                    $id = $_SESSION["login"];
                


                $sql = "SELECT * from vagas "; 
                $result = $mysqli->query($sql);

                $sql2 = $mysqli->query("SELECT Id_vaga from vagas");
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

            <div style="text-align: left; margin: 4%;margin-left: 5%; border: 1px hidden;border-radius: 2%;">            
                <table style="margin: 0 0 4%;">
                    <thead>
                        <tr>
                        <th>
                        </th>
                        </tr>
                    </thead>
                    <?php  while ($row = $result->fetch_assoc()){ ?>
                        <tr style="margin: 5%;">
                            
                            <td style="padding: 10px 10px 10px; width: 20%;height: 30%;border: 2px #D3D3D3;border-radius: 15px; border-style: outset;"> <?php custom_echo($row['Conteudo'], 200); echo '<br>'; ?>
                                 <a style="margin: 10px; float: left;" class="botao-verde" href="vagaDetalhesFatec.php?visu=<?php echo $row['ID_vaga']?>" >Visualizar</a>
                                 <a style="margin: 10px; float: left;" class="botao-azul" href="ajustarPagina.php?editar=<?php echo $row['ID_vaga']; ?>">Aprovar</a>  
                                 <a style="margin: 10px; float: left;" class="botao-vermelho" href="processarDelete.php?delete=<?php echo $row['ID_vaga']; ?>">Deletar</a>
                                 
                            </td>

                        </tr>
                        <?php  } ?>
                </table>
            
            
                
            </div>

        </div>

    </div>
    
    <script src="footer.js"></script>

</body>
</html>