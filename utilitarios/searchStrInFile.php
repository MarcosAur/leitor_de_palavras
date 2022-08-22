<?php
    include './returnsFactory.php';
    include './createArchive.php';
    include './funcoesBusca.php';

    $codes = [
        "00" => "PROCESSADO NORMALMENTE",
        "01" => "UC INVÁLIDA OU NÃO EXISTENTE",
        "02" => "FATURAMENTO PARA O PERÍODO JÁ EXISTENTE",
        "09" => "INCONSISTÊNCIA NO REGISTRO",
        "10" => "UC DESLIGADA",
        "11" => "ALTERAÇÃO DE CLASSE",
        "12" => "CPF OU CNPJ DIFERE DO CADASTRO",
        "13" => "INDICADO COBRAR POR MAIS DE UM MÊS E NÃO TEM CARACTERISTICA UC CADASTRADA",
        "14" => "CARACTERISTICA UC CADASRTRADA NA ENTIDADE NÃO ESTÁ CONFIGURADA PARA COBR. TERCEIROS",
        "15" => "JÁ TEM CARACTERISTICA UC ATIVA PARA COBRANÇA NA DATA DE INÍCIO INFORMADA",
        "20" => "OUTRAS REJEIÇÕES"
    ]; // Códigos de retorno padrão

    //Mensagem de sucesso do upload
    if (isset($_COOKIE['sucess'])) {
        $msg = $_COOKIE['sucess'];
        echo "<script>alert('$msg');</script>";
        unset($_COOKIE['sucess']);  
    }     
    $file = file_get_contents("../upload/texto.txt");

    $fileInLines = explode("\n",$file); // o "\n" foi utilizado pois a divisão é baseada na quebra de linha
    $counter = 1;

    foreach ($fileInLines as $registro) {
        echo "Tipo de Registro: " . resgatarTipoRegistro($registro);
        echo "Tipo de Transação:" . resgatarTipoDeTransação($registro);
        die();
    }
?>