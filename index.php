<?php
    if (isset($_COOKIE['error'])) {
        $erro = $_COOKIE['error'];
        echo "<script>alert('$erro');</script>";
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Arquivos de Faturamento</title>
</head>
<body>
    <form action="utilitarios/saveData.php" method="post" enctype="multipart/form-data">
        <div class="row"> <!-- Inicio da div inicial que compreende todas as outras divs -->
            <div class='col-3'></div> <!-- Div para alinhar as outras -->
            <div class='col-6'> <!-- Div para receber o formulário -->
                <center><h1>Leitor de Arquivos de Faturamento</h1></center>
                <div> <!-- Inicio da div que compreende o recebimento da String pesquisada -->
                    <label for="stringField">Informe a sequencia de caracteres que deseja encontrar:</label>
                    <input id="stringField" name="str" type="text">
                </div> <!-- Fim da div dos campo string pesquisada-->
            
                <div> <!-- Inicio da div que compreende o recebimento do arquivo-->
                    <label for="arquivo_upload">Faça upload do arquivo no qual deseja pesquisar: </label>
                    <br>
                    <input id="arquivo_upload" name="arquivo" type="file">
                </div> <!-- Fim da div dos campo Recebimento de Arquivo-->
        
            </div> <!-- Fim da div para receber o formulário -->
        </div> <!-- Fim da Div inicial que compreende todas as outras divs -->
        <div class="row mt-3"> <!-- Inicio da div row do botão-->
            <div class="col-3">
                <!-- Div de alinhamento do botão -->
            </div>
            <div class="col-6">
                <button class="btn btn-primary btn-lg btn-block" type="submit">Iniciar Busca</button> 
            </div>
        </div> <!-- Fim da div row do botão-->
        
    </form>
</body>
</html>