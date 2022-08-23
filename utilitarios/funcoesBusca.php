<?php

    function resgatarTipoRegistro($registro){
        $valorRetornado = substr($registro,0,1);
        return $valorRetornado;
    }

    function resgatarTipoDeTransação($registro){
        $valorRetornado = substr($registro,1,2);
        return $valorRetornado;
    }

    function resgatarCodigoProduto($registro){
        $valorRetornado = substr($registro,3,4);
        return $valorRetornado;
    }

    function resgatarNumeroDaUC($registro){
        $valorRetornado = substr($registro,7,10);
        return $valorRetornado;
    }
    
    function resgatarCodigoDoClienteNaTerceira($registro){
        $valorRetornado = substr($registro,17,15);
        return $valorRetornado;
    }
    
    function resgatarPeriodoReferencia($registro){
        $valorRetornado = substr($registro,32,6);
        return $valorRetornado;
    }

    function resgatarStatusRetorno($registro){
        $valorRetornado = substr($registro,38,1);
        return $valorRetornado;
    }

    function resgatarDataDeProcessamento($registro){
        $valorRetornado = substr($registro,39,8);
        return $valorRetornado;
    }

    function resgatarValor($registro){
        $valorRetornado = substr($registro,47,15);
        return $valorRetornado;
    }

    function resgatarCodigoRetorno($registro){
        $valorRetornado = substr($registro,62,2);
        return $valorRetornado;
    }

    function resgatarTipoDeDocumento($registro){
        $valorRetornado = substr($registro,64,1);
        return $valorRetornado;
    }

    function resgatarDocumento($registro){
        $valorRetornado = substr($registro,65,14);
        return $valorRetornado;
    }

    function inicio($registro){
        $retorno = substr($registro,0,7);
        return $retorno;
    }

    function meio($registro){
        $retorno = substr($registro,17,30);
        return $retorno;
    }


    function fim($registro){
        $retorno = substr($registro,64);
        return $retorno;
    }

    function gerarValorFormatado($valor){
        $valorFormatado = intval($valor);
        $valorFormatado = strval($valorFormatado);
        $valor_em_centavos = substr($valorFormatado, -2);
        $quantidade_caracteres = strlen($valorFormatado) - 2;
        if ($quantidade_caracteres != 0) {
            $valor_em_real = substr($valorFormatado, 0, $quantidade_caracteres);
        }else{
            $valor_em_real = "0";
        }
        
        return "$valor_em_real,$valor_em_centavos";
    }

    function obsRetorno($retornoUC){
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
            "20" => "OUTRAS REJEIÇÕES",
        ];
        
        return $codes[$retornoUC];
        
    }



?>