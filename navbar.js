document.write(`
<div style="color: white; height: 110px; padding: 0 20%; background-color: #81182d;">
    <a href="index.html">
        <img src="logoStarJobs.png" alt="Logo Star Jobs" height="160px" width="160px"  style=" float: left;">
    </a>

    <div class="botoes"  style="float: right; height: 100%; padding: 40px 0; ">
        <a href="#" class="botao-azul" id="myBtn" style="font-size: 1.5em; margin-right: 10px; ">CADASTRAR</a>
        <a href="#" class="botao-verde" id="myBtn2" style="font-size: 1.5em;">LOGAR</a>
    </div>

</div>

    <!--Modal escolher cadastro -->

    <div id="myModal" class="modal">
        <div class="modal-content" style="text-align:center; padding-top: 40px;padding-bottom: 40px;">
            <span class="close">&times;</span>
            <a href="estudanteCadastro.html" class="botao-azul" id="myBtn"
                style="font-size: 1.5em; margin-right: 10px;">ESTUDANTE</a>
            <a href="empresaCadastro.html" class="botao-amarelo" style="font-size: 1.5em;">EMPRESA</a>
        </div>
    </div>

    <!--Modal escolher Logar -->
    <div id="myModal2" class="modal2">
        <div class="modal-content2" style="text-align:center; padding-top: 40px;padding-bottom: 40px;">
            <span class="close2">&times;</span>
            <a href="estudanteLogar.php" class="botao-azul" id="myBtn2"
                style="font-size: 1.5em; margin-right: 10px;">ESTUDANTE</a>
            <a href="empresaLogar.php" class="botao-amarelo" style="font-size: 1.5em;">EMPRESA</a>
            <a href="escolaLogar.php" class="botao-vermelho" style="font-size: 1.5em; margin-left: 10px;">FATEC</a>
        </div>
    </div>
`);