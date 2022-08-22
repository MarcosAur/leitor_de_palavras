<?php

    function resgatarTipoRegistro($registro){
        $valorRetornado = substr($registro,0,1);
        return $valorRetornado;
    }

    function resgatarTipoDeTransação($registro){
        $valorRetornado = substr($registro,1,2);
        return $valorRetornado;
    }

    function resgatarCódigoProduto($registro){
        $valorRetornado = substr($registro,3,4);
        return $valorRetornado;
    }

?>