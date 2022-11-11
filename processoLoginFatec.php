<?php 
    session_start ();
    include("conexao.php"); 
    
    if(isset($_REQUEST['enviar']))
    {
    $a = $_REQUEST['login'];
    $b = $_REQUEST['senha'];
    
    $res = $mysqli->query("SELECT Id_admin from fatec where Login ='$a'and Senha ='$b'");
    $result= mysqli_fetch_array($res);
    if($result)
    {
       
        $_SESSION["login"]= intval($result[0]);
        header("location:fatecPerfil.php");
    }
    else	
    {
        header("location:escolaLogar.php?err=1");
        
    }
    }
?>