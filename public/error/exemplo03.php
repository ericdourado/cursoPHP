<?php

function manipuladorError(
    $errno,
    $errstr,
    $errfile,
    $errline
    )
    {

    var_dump("Numero: " . $errno);
    var_dump("Mensagem: " . $errstr);
    var_dump("Arquivo: " . $errfile);
    var_dump("Linha: " . $errline);
}

set_error_handler("manipuladorError");



?>