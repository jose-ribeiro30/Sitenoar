<?php 
    session_start ();
    include("conexao.php"); 
    
    if(isset($_REQUEST['enviar']))
    {
    $a = $_REQUEST['email'];
    $b = $_REQUEST['senha'];
    
    $res = $mysqli->query("SELECT Id from aluno where Email ='$a'and Senha ='$b'");
    $result= mysqli_fetch_array($res);

    if($result)
    {
       
        $_SESSION["login"]= intval($result[0]);
        header("location:estudantePerfil.php");
    }
    else	
    {
        header("location:estudanteLogar.php?err=1");
        
    }
    }
?>