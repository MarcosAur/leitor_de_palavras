<?php
    function createReturnArchive ($data){
        $fileName = "../upload/SearchInformations.txt";
        $edit_file = fopen($fileName, 'a+');


        $searched_code = $data['Searched_Codes'] . " -> " . $data['Type_of_Registers'];
        $qtd = $data['Quant_Registers'];

        fwrite($edit_file, "Infomações sobre o arquivo de retorno\n" );
        fwrite($edit_file, "Código Pesquisado: $searched_code\n" );
        fwrite($edit_file, "Quantidadde de Registros Encontrados: $qtd\n");
        fclose($edit_file);

        $fileName = "../upload/FilteredRegisters.txt";
        $edit_file = fopen($fileName, 'w');

        $list_registers = $data['Registers'];

        foreach ($list_registers as $lineValue) {
            fwrite($edit_file, "$lineValue\n" );
        }
        fclose($edit_file);


    }


?>