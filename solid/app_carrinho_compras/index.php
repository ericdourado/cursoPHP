<?php
require __DIR__."/vendor/autoload.php";
use App\CarrinhoCompra;


echo "<h1> Sem SRP</h1>";
$carrinho1 = new CarrinhoCompra();
print_r($carrinho1->exibirItens());
echo "valor total: ". $carrinho1->exibirValorTotal() . "<br>";

$carrinho1->adicionarItem("bicicleta", 790.50);
$carrinho1->adicionarItem("Geladeira", 1990.50);
$carrinho1->adicionarItem("Computador", 5990.70);
print_r($carrinho1->exibirItens());
echo "<br> valor total: ". $carrinho1->exibirValorTotal() . "<br>";
echo "status: ". $carrinho1->exibirStatus(). "<br>";
if($carrinho1->confirmarPedido())
{
    echo "pedido realizado com sucesso";
}else{
    echo "carrinho nao possui itens";
}

