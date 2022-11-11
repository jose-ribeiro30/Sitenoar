<?php 
    session_start ();
    include("conexao.php"); 
    
    if(isset($_REQUEST['enviar']))
    {
    $a = $_REQUEST['email'];
    $b = $_REQUEST['senha'];
    
    $res = $mysqli->query("SELECT Id_empresa from empresa where Email ='$a'and Senha ='$b'");
    $result= mysqli_fetch_array($res);
    if($result)
    {
       
        $_SESSION["login"]= intval($result[0]);
        header("location:empresaPerfil.php");
    }
    else	
    {
        header("location:empresaLogar.php?err=1");
        
    }
    }
?>