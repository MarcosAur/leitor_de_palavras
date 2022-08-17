<?php
    $file = file_get_contents("../upload/texto.txt");
    $fileInLines = explode(";",$file);
    $counter = 1;
    $str_compare = $_COOKIE['String_Compare'];
    foreach ($fileInLines as $lineValue) {
        if (str_contains(strtolower($lineValue), strtolower($str_compare))) {
            echo $counter;
        }

        $counter += 1;
    }

?>