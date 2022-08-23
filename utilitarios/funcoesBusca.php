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
        $valorRetornado = substr($registro,61,2);
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


?>