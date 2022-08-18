<?php
    include './returnsFactory.php';
    include './createArchive.php';

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
    $str_compare = $_COOKIE['String_Compare'];
    
    $returned_registers = [];
    foreach ($fileInLines as $lineValue) {
        if (substr($lineValue, -2) == $str_compare){
            array_push($returned_registers, $lineValue);
        }
        
        $counter += 1;
    }

    if(array_key_exists($str_compare,$codes)){
        $Type_of_Registers = $str_compare;
    }else {
        $Type_of_Registers = "Chave Inexistente";
    }

    $qtd = count($returned_registers);
    $return_to_client = [
        'Quant_Registers' => $qtd,
        'Registers' => $returned_registers,
        'Searched_Codes' => $str_compare,
        'Type_of_Registers' => $Type_of_Registers,
    ];

    $msg = "Verificação bem sucedida. Será gerado um arquivo e o download será automatico";
    noRedirectMessage($msg);
    createReturnArchive($return_to_client);
    $msg = "Processo Finalizado";
    crateSucessMessage($msg, "../views/telaFinal.php");
?>