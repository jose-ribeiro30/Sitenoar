<?php
    include ("conexao.php");

   session_start();
   
    
    $idvaga = $_GET['editar'];
    
    $_SESSION['idVaga'] = $idvaga;


    if($mysqli->connect_error){
        die("Connection failed ".$mysqli->connect_error);
    }

 

    $sql = "SELECT Conteudo from vagas where ID_vaga = '$idvaga' ";

    $result = $mysqli->query($sql);

    if ($result->num_rows > 0){

    $row = $result->fetch_assoc();

    $conteudo = $row["Conteudo"];


echo

"<html>
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Star Jobs - Empresa Perfil</title>

    <link href=\"style.css\" rel=\"stylesheet\">

</head>
<body style='margin: 0;'>

            <style>
            #container {
                width: 30%;
                margin: 20px;
            }
            .ck-editor__editable[role=\"textbox\"] {
                /* editing area */
                min-height: 500px;
            }

            </style>


        <script src=\"navbarEmp.js\"></script>

        <div class=\"background-cinza\" style=\"height: 100px; border-bottom: black; padding: 0 45%;\">
            <img src=\"img/empresa.png\" alt=\"estudante\" height=\"100px\">
        </div>

        <div style=\"height: 100px;\">

        <br>
        <br>
    
        <a href=\"empresaPerfil.php\" class=\"botao-azul\" style=\"font-size: 1.5em; margin-left: 100px;\">Voltar</a>

    </div>

    <div style='height: 650px; margin: 5% 20% 10%; float: top;  box-shadow: 1px 1px 4px #555555; border-radius: 25px; padding: 10px 20px 30px; border: 1px solid gray;'> 

        <form action='processarEditVaga.php' method='post'>



            <h1>Vaga para edição:</h1> 
        
            <br> 
            <br>
            <div style='overflow: scroll; height: 400px;'>
            <textarea name=\"conteudo\" id=\"editor\"> $conteudo</textarea><br>
            </div>
            <br> 
            <br>

            <input class='botao-azul' type ='submit'>
        </form>
            
                

        </div >

        <script src=\"ckeditor.js\"></script>
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

        <script src=\"footer.js\"></script>
</body>
</html>";

} else {
	echo "Not Found";
}
$mysqli->close();

    
?>
