<?php 
include ("conexao.php");
    session_start();

    
    $id = $_SESSION ['Id'];

    $email = $_POST['email'];
    $tel = $_POST['telefone'];

    if(!empty($email || $tel)){

    


        if(!empty($email)){
        var_dump($id);
        $mysqli->query("UPDATE aluno 
        SET Email = '$email'  
        WHERE Id = $id ; ") or die($mysqli->error);


        
      

        }
        if(!empty($tel)){
            var_dump($id);
            $mysqli->query("UPDATE aluno 
            SET Telefone = $tel
            WHERE Id = $id ; ") or die($mysqli->error);
    
           
            
           
            

            }


        echo "<script>alert('Atualizado com Sucesso'); </script>";
        }
        header("location:estudantePerfil.php");

?>