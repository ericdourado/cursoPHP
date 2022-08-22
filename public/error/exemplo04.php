<?php

function manipuladorExcecao($exception)
{
    var_dump($exception);
}

set_exception_handler("manipuladorExcecao");

throw new Exception("Excecao",400);

?>