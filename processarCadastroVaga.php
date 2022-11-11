<?php 
    include ('conexao.php');

        $id = $_POST['idEmpresa'];
        $conteudo = $_POST['conteudo'];

        $conteudo1 = html_entity_decode(filter_input(INPUT_POST, $conteudo, FILTER_SANITIZE_SPECIAL_CHARS));
        $id1 = html_entity_decode(filter_input(INPUT_POST, $id, FILTER_SANITIZE_NUMBER_INT));


        if(!empty($conteudo && $id)){

        $mysqli->query("INSERT INTO `vagas`(`ID_empresa`,`Conteudo`) VALUES ('$id','$conteudo')") or die($mysqli->error);
        echo "<alert> Cadastro realizado com sucesso!</alert>";
        
        header("location:empresaPerfil.php");

        }


    

?>