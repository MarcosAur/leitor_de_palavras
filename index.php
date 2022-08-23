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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <title>Arquivos de Faturamento</title>
</head>
<body>
    <form  action="utilitarios/saveData.php" method="post" enctype="multipart/form-data">
        <div class="container">
            <div class="row"> <!-- Inicio da div inicial que compreende todas as outras divs -->
                <div class="col-3">
                </div> <!-- Div para alinhar as outras -->
                <div class="col-6" > <!-- Div para receber o formulário -->
                    <center><h1>Leitor de Arquivos de Faturamento</h1></center>                
                    <div class="form-group"> <!-- Inicio da div que compreende o recebimento do arquivo-->
                        <label for="arquivo_upload">Faça upload do arquivo no qual deseja pesquisar: </label>
                        <br>
                        <input class="input-group" id="arquivo_upload" name="arquivo" type="file">
                    </div> <!-- Fim da div dos campo Recebimento de Arquivo-->
            
                </div> <!-- Fim da div para receber o formulário -->
            </div> <!-- Fim da Div inicial que compreende todas as outras divs -->
        </div>

        <div class="container">
            <div class="row mt-3 form-group"> <!-- Inicio da div row do botão-->
                <div class="col-3">
                    <!-- Div de alinhamento do botão -->
                </div>
                <div class="col-6 form-group">
                    <button class="btn btn-primary btn-md btn-block" type="submit">Iniciar Busca</button> 
                </div>
            </div> <!-- Fim da div row do botão-->
        </div>
    </form>
</body>
</html>