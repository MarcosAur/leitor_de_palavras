<?php
 $qtdRegistros  = $_COOKIE['sucess'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Finalização</title>
</head>
<body>
<table class="table table-bordered  ">
        <thead>
            <tr>
                <th>
                    Quantidade de Retornos lidos
                </th>
                <th>
                    Baixar planilha com os dados
                </th>
                <th>
                    Verificar detalhamento dos registros
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $qtdRegistros; ?></td>
                <td><a href="../upload/InformaçõesClientes.csv"><button>Download</button></a></td>
                <td><a href="../upload/InformacoesTransacoes.txt"><button>Visualizar</button></a></td>
            </tr>
        </tbody>
    </table>
    <center><a href="../index.php"><button>Retornar ao Inicio</button>  </a></center>
</body>
</html>