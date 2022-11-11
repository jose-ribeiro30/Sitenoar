<?php 
    include ("conexao.php");
    
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $rg = $_POST['rg'];
    $data = $_POST['data'];
    $tel = $_POST['telefone'];
    $curso = $_POST['curso'];
    $senha = $_POST['senha'];
    $senha2 = $_POST['senha2'];

    if($senha == $senha2){
    $senhareal = $senha;
    }
    
    if(!empty($nome && $email && $cpf && $rg && $tel && $curso && $data && $curso && $senhareal)){
    $mysqli->query("INSERT INTO aluno ( Nome_completo, RG, data_nasc, Telefone, Email, CPF, Curso, Senha) 
    VALUES ($nome,$rg,$data,$tel,$email,$cpf,$senhareal)");
    
    header("location:estudanteLogar.php");

}


?>