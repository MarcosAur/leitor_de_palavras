<?php
    function crateErrorMessage($msg, $redirectedTo){
        setcookie("error",$msg, time() + 10, "/");
        header("Location: $redirectedTo");
    }

    function crateSucessMessage($msg, $redirectedTo){
        setcookie("sucess",$msg, time() + 10, "/");
        header("Location: $redirectedTo");
    }
?>  