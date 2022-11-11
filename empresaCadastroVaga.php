<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trivagas - Empresa Cadastrar Vaga</title>

    <link href="style.css" rel="stylesheet">
</head>

<body style="margin: 0">


            
    
    <style>
        #container {
            width: 80%;
            margin: 20px;
        }
        .ck-editor__editable[role="textbox"] {
            /* editing area */
            min-height: 300px;
        }
      
    </style>

    <script src="navbarEmp.js"></script>

    <div class="background-amarelo" style="height: 100px;">

        <br>
        <br>
    
        <a href="empresaPerfil.php" class="botao-azul" style="font-size: 1.5em; margin-left: 100px;">Voltar</a>

    </div>

    <div class="background-amarelo" style="height: 850px;">
    
        <div style="height: 90%;width: 50%;background-color: #dddddd;border-style: solid; border-radius: 15px;border-color: #000000;margin-left: 25%;">
            
            <h3 style="color: #000000; text-align: center;font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">PREENCHA ABAIXO PARA CADASTRAR UMA NOVA VAGA</h3>
            
            <br>
            <br>    

            <form action="" method="post">

            <label style="color: #000000;font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; margin-left: 5%;">Identificador único da empresa:</label>
            <br>
            <input name="idEmpresa" type="text" class="input-text" style="margin: 0 5%; width: 90%;" placeholder="Ex: 1" required>


            <br>
            <br>


            <label style=" color: #000000;font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; margin-left: 4%">Sobre a Vaga:</label>

            

            <div style="margin: 0% 5%;">
            <textarea name="conteudo" id="editor" required></textarea>
            </div>

            <br>
            <br>
            <br>

            <button type="submit" name="enviar" class="botao-amarelo" style="font-size: 1.5em; margin: 0 38%">CADASTRAR</a>

            </form>

            <?php       
                include ("conexao.php");

                    
                $conteudo = html_entity_decode(filter_input(INPUT_POST, 'conteudo', FILTER_SANITIZE_SPECIAL_CHARS));
                $id = html_entity_decode(filter_input(INPUT_POST, 'idEmpresa', FILTER_SANITIZE_NUMBER_INT));

                var_dump($id);
                var_dump($conteudo);

                if(!empty($conteudo && $id)){
                    $mysqli->query("INSERT INTO `vagas`(`ID_empresa`,`Conteudo`) VALUES ('$id','$conteudo')") or die($mysqli->error);
                    
                }

            
                
   
  
            ?>

        </div>

    </div>

    <script src="ckeditor.js"></script>
    <script>
	    ClassicEditor
		    .create( document.querySelector( '#editor' ), {
			// toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
		    } )
		    .then( editor => {
			    window.editor = editor;
		    } )
		    .catch( err => {
			    console.error( err.stack );
		    } );
    </script>

    <script src="footer.js"></script>

</html>