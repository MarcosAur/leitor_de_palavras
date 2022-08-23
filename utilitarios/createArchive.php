<?php
    function escreverArquivoClientes($data){
        $fileName = "../upload/InformacoesTransacoes.txt";
        $edit_file = fopen($fileName, 'a+');

        fwrite($edit_file, "$data\n");
        fclose($edit_file);
        
    }

    function createReturnCSV($data){
        $fileName = "../upload/ClientesErro.csv";
        $edit_file = fopen($fileName, 'a+');

        fwrite($edit_file, "$data\n");
        fclose($edit_file);
    }



?>