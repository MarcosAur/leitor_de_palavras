<?php
    function crateErrorMessage($msg, $redirectedTo){
        setcookie("error",$msg, time() + 1, "/");
        header("Location: $redirectedTo");
    }

    function crateSucessMessage($msg, $redirectedTo){
        setcookie("sucess",$msg, time() + 1, "/");
        header("Location: $redirectedTo");
    }

    function crateSucessLongMessage($msg, $redirectedTo){
        setcookie("sucess",$msg, time() + 84000, "/");
        header("Location: $redirectedTo");
    }

    function noRedirectMessage($msg){
        echo "<script>alert('$msg');</script>";
    }
?>  