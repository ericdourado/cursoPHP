<?php
function qualquer()
{
    $GLOBALS["nome"] = "Eric";
    echo isset($_GET["nome"]) ? $_GET["nome"] : "";
}

$get = fn($key) => isset($_GET[$key]) ? $_GET[$key] : "";
$id = ((int)$get("id")) + 1;
echo isset($_GET["nome"]) ? $_GET["nome"] : "";
echo '<a href="?id='.$id.'">Proximo</a>';


// var_dump($GLOBALS);
// var_dump($_SERVER);
