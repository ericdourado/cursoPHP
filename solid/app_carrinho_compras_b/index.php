<?php
require __DIR__ . "/vendor/autoload.php";

use App\CarrinhoCompra;
use App\Item;
use App\Pedido;
use App\EmailService;

$pedido = new Pedido();
$item1 = new Item();
$item2 = new Item();

$total = 0;

$item1->setDescricao("Porta-copos");
$item1->setValor(4.50);
$item2->setDescricao("Lâmpada");
$item2->setValor(8.50);

echo "<h1> Com SRP</h1>";
echo "<h2> PEDIDO</h2>";
echo "<pre>";
print_r($pedido);
echo "</pre>";

$pedido->getCarrinhoCompra()->adicionarItem($item1);
$pedido->getCarrinhoCompra()->adicionarItem($item2);
// ---------------------------------------------------------
echo "<pre>";
print_r($pedido);
echo "</pre>";
// ---------------------------------------------------------
echo "<h2>Itens do Carrinho</h2>";
echo "<pre>";
print_r($pedido->getCarrinhoCompra()->getItens());
echo "</pre>";
// ---------------------------------------------------------
echo "<h2>Valor do Pedido</h2>";
echo "<pre>";
print_r($pedido->getCarrinhoCompra()->getItens());
echo "</pre>";
// ---------------------------------------------------------
echo "<h2>Valor Total</h2>";
echo "<pre>";
foreach ($pedido->getCarrinhoCompra()->getItens() as $key => $item) {
    $total += $item->getValor();
  
}
echo $total;
echo "</pre>";
// ---------------------------------------------------------
echo "<h2>Carrinho está valido?</h2>";
echo "<pre>";
echo $pedido->getCarrinhoCompra()->validarCarrinho();
echo "</pre>";
// ---------------------------------------------------------
echo "<h2>Status Pedido</h2>";
echo "<pre>";
echo $pedido->getStatus();
echo "</pre>";
// ---------------------------------------------------------
echo "<h2>Confirmar Pedido</h2>";
echo "<pre>";
echo $pedido->confirmar();
echo "</pre>";
// ---------------------------------------------------------
echo "<h2>Status Pedido</h2>";
echo "<pre>";
echo $pedido->getStatus();
echo "</pre>";
// ---------------------------------------------------------
echo "<h2>E-mail</h2>";
if($pedido->getStatus() == "confirmado")
{
    echo EmailService::dispararEmail();
}













// print_r($carrinho1->exibirItens());
// echo "valor total: ". $carrinho1->exibirValorTotal() . "<br>";

// $carrinho1->adicionarItem("bicicleta", 790.50);
// $carrinho1->adicionarItem("Geladeira", 1990.50);
// $carrinho1->adicionarItem("Computador", 5990.70);
// print_r($carrinho1->exibirItens());
// echo "<br> valor total: ". $carrinho1->exibirValorTotal() . "<br>";
// echo "status: ". $carrinho1->exibirStatus(). "<br>";
// if($carrinho1->confirmarPedido())
// {
//     echo "pedido realizado com sucesso";
// }else{
//     echo "carrinho nao possui itens";
// }
