<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StarJobs - Estudante Aplicar Vaga</title>

    <link href="style.css" rel="stylesheet">
    <link href="cadastroModal.css" rel="stylesheet">
</head>

<body style="margin: 0;">
    
    <script src="navbarEstu.js"></script>

    <div style="height: 100px;">

        <br>
        <br>
    
        <a href="javascript:void(0)" onClick="history.go(-1); return false;" class="botao-cinza" style="font-size: 1.5em; margin-left: 100px;">Voltar</a>

    </div>


    <?php 
    include ("conexao.php");
    session_start();

    $vaga = $_SESSION['vaga'];
    $empresa = $_SESSION['empresa'];


    if(isset($_FILES['arquivo'])){
            $arquivo = $_FILES['arquivo'];
            
          
            if($arquivo['error'])
                die("<p style=\" float: center; margin-left: 30%; font-size: 30px; \">Falha ao enviar arquivo.Tente novamente.</p>");


            if($arquivo['size'] > 3145728)
                die("<p style=\" float: center; margin-left: 30%; font-size: 30px; \">Arquivo muito grande! Máximo: 3MB.</p>");

            $pasta= "cv/";
            $nomeDoArquivo = $arquivo['name'];
            $novoNomeDoArquivo = uniqid();
            $extensao = strtolower(pathinfo($nomeDoArquivo,PATHINFO_EXTENSION));

            if($extensao != "pdf")
                die("<p style=\" float: center; margin-left: 30%; font-size: 30px; \">Tipo de arquivo não aceito</p>");


            $path = $pasta . $novoNomeDoArquivo . ".". $extensao;

            $deu_certo = move_uploaded_file($arquivo["tmp_name"],$path);
            
            // VOLTAR AQUI QUANDO TIVER SESSÃO INICIADA PELO ALUNO,  E SOUBER O ID DO ALUNO 

            if($deu_certo){
                $mysqli->query("INSERT INTO vagas_do_aluno (ID_vaga, path) values ('$vaga','$path')") or die($mysqli->error);
                die ("<p style=\" float: center; margin-left: 30%; font-size: 30px; \"> Arquivo enviado com sucesso!");
            }else
                die("Falha ao enviar arquivo!");
    }
    
    
    
    
    ?>

    <div style="height: 600px;">
    
        <div style="margin: 0 30% 5% 32.5%;background-color: #dddddd;border-style: solid; border-radius: 15px;border-color: #000000;">
        
            <h3 style="color: #000000; text-align: center;font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">PREENCHA ABAIXO PARA FAZER SE APLICAR A VAGA</h3>
        <form method="POST" enctype="multipart/form-data">
            <label style="color: #000000;font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; margin-left: 5%">Email:</label>
            <br>
            <input type="text" class="input-text" style="margin: 5px 3%;width: 90%;">

            <br>
            <br>

            <label style="color: #000000;font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; margin-left: 5%">Currículo:</label>
            <br>
            <input name="arquivo" type="file" style="margin: 10px 0 0 5%;color: black;font-size: 1em;">

            <br>
            <br>
        
            <div style="margin: 2% 0 5%">
            <button class="botao-azul" name="upload" type="submit" style="font-size: 1.5em; margin: 0 35%;">APLICAR</a>
            </div> 
          
            
            

        </div>

    </div>

    <script src="footer.js"></script>
</body>
</html>