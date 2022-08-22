<?php

namespace App;

use App\Item;

class CarrinhoCompra
{
   //Atributos
    private $itens;

   //Métodos

   public function __construct()
   {
        $this->itens = [];
   }
   public function getItens()
   {
    return $this->itens;
   }
   public function adicionarItem(Item $item)
   {
    array_push($this->itens, $item);
    return true;
   }
   public function validarCarrinho()
   {
        return count($this->itens) > 0;
   }

}