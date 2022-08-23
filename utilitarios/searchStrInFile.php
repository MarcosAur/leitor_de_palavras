<?php
    include './returnsFactory.php';
    include './createArchive.php';
    include './funcoesBusca.php';

    //Mensagem de sucesso do upload
    if (isset($_COOKIE['sucess'])) {
        $msg = $_COOKIE['sucess'];
        echo "<script>alert('$msg');</script>";
        unset($_COOKIE['sucess']);  
    }     
    $file = file_get_contents("../upload/texto.txt");

    $fileInLines = explode("\n",$file); // o "\n" foi utilizado pois a divisão é baseada na quebra de linha
    $counter = 1;
    unlink("../upload/InformacoesTransacoes.txt");
    unlink("../upload/InformaçõesClientes.csv");


    foreach ($fileInLines as $registro) {
        $retorno = "";
        $retorno .= "Registro -> $counter\n";
        $retorno .= "Tipo de Registro: " . resgatarTipoRegistro($registro) . "\n";
        $retorno .= "Tipo de Transação: " . resgatarTipoDeTransação($registro). "\n";
        $retorno .= "Código Produto: " . resgatarCodigoProduto($registro). "\n";
        $retorno .= "Número da UC: " . resgatarNumeroDaUC($registro). "\n";
        $retorno .= "Código Cliente na terceira: " . resgatarCodigoDoClienteNaTerceira($registro). "\n";
        $retorno .= "Ano/Mês de referência: " . resgatarPeriodoReferencia($registro). "\n";
        $retorno .= "Status Retorno: " . resgatarStatusRetorno($registro). "\n";
        $retorno .= "Data de Processamento: " . resgatarDataDeProcessamento($registro). "\n";
        $retorno .= "Valor: " . resgatarValor($registro). "\n";
        $retorno .= "Código de Retorno: " . resgatarCodigoRetorno($registro). "\n";
        $retorno .= "Tipo de Documento: " . resgatarTipoDeDocumento($registro). "\n";
        $retorno .= "Documento: " . resgatarDocumento($registro). "\n";
        escreverArquivoClientes($retorno);
        $counter += 1;
    }

    $retorno = "INICIO;UC;MEIO;VALOR AJUSTADO;COD RETORNO;OBS. Codigo;CPF;FIM\n";
    foreach ($fileInLines as $registro) {
        $QUANTIDADE_DE_CARACTERES = 89;
        if (strlen($registro) == 89) {
            $retorno .= inicio($registro) .";";
            $retorno .= resgatarNumeroDaUC($registro) . ";";
            $retorno .= meio($registro) . ";";
            $valor = resgatarValor($registro);
            $valor = gerarValorFormatado($valor);
            $retorno .=  $valor . ";";
            $retornoUC = resgatarCodigoRetorno($registro);
            $retorno .=  $retornoUC . ";";
            $retorno .= obsRetorno($retornoUC) . ";";
            $retorno .= resgatarDocumento($registro) . ";";
            $retorno .= fim($registro) . "\n";
        }  
        
    }
    createReturnCSV($retorno)
?>