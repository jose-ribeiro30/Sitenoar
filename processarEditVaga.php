<?php 
    include ("conexao.php");
    session_start();

    $idVaga = $_SESSION['idVaga'];
    $conteudo = $_POST['conteudo'];

    if(!empty($idVaga && $conteudo)){
        $mysqli->query("UPDATE vagas
        SET Conteudo = '$conteudo'
        WHERE ID_vaga = $idVaga;")or die ($mysqli->error);

        header("location:empresaPerfil.php");
    }



?>