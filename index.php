<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arquivos de Faturamento</title>
</head>
<body>
    <h1>Leitor de Arquivos de Faturamento</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <div>
            <label for="string_pesquisada">Informe a sequencia de caracteres que deseja encontrar</label>
            <input id="string_pesquisada" name="str_pesquisa" type="text">
        </div> <!-- Fim da div dos campo string pesquisada-->
        <br>
        <div>
            <label for="arquivo_upload">Faça upload do arquivo no qual deseja pesquisar</label>
            <input id="arquivo_upload" name="arquivo_upload" type="file">
        </div> <!-- Fim da div dos campo Recebimento de Arquivo-->
        <br>
        <div>
            <input type="submit" value="Pesquisar">
        </div> <!-- Fim da div dos campo Recebimento de Arquivo-->
    </form>
</body>
</html>