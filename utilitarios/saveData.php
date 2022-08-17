<?php
    include './returnsFactory.php';
    $arquivo = $_FILES['arquivo'];
    
    if ($arquivo['type'] == "text/plain") {
        if (move_uploaded_file($arquivo['tmp_name'], "../upload/texto.txt")) {
            $path = "http://127.0.0.1:8000/utilitarios/searchStrInFile.php";
            crateSucessMessage("Upload realizado com sucesso",$path);
            setcookie("String_Compare", $_POST['str'], time() + 84600, "/");
        } else {
            crateErrorMessage("Erro ao realizar upload","http://127.0.0.1:8000");
        }
    }else {
        crateErrorMessage("Formato de arquivo inválido","http://127.0.0.1:8000");
    }
