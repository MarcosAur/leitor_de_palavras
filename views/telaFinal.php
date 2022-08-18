<?php
    if (isset($_COOKIE['sucess'])) {
        $msg = $_COOKIE['sucess'];
        echo "<script>alert('$msg');</script>";
        unset($_COOKIE['sucess']);  
    }   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="../upload/FilteredRegisters.txt">
        <button>
            Ver Retornos Filtrados
        </button>
    </a>
    <a href="../upload/SearchInformations.txt">
        <button>
            Ver Informações da Busca
        </button>
    </a>
    <a href="../upload/SearchInformations.txt">
        <button>
            Baixar Arquivos
        </button>
    </a>

</body>
</html>