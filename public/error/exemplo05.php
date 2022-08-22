<?php

function manipuladorExcecao($exception)
{
    var_dump($exception);
}

set_exception_handler("manipuladorExcecao");

class SenhaException extends Exception {

}

$nome = "";
$senha = "123";
try{
    if(strlen($senha)< 6)
    {
        throw new SenhaException("Senha Fraca<br>");
    }
}catch(SenhaException $e){
    echo "Problema na sua senha: ". $e->getMessage();
}catch(Exception $e){
    echo $e->getMessage();
}
finally{
    var_dump("<br>está no finally");
}

// $exibeErro = fn($error) => throw new Exception($error);
// echo "Depois da excecao";
// echo $exibeErro("Error!!!!")
?>