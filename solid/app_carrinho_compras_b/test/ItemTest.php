<?php

use App\Item;
use PHPUnit\Framework\TestCase;

class ItemTest extends TestCase
{
    public function testEstadoInicialItem()
    {
        $item = new Item();
    
        $this->assertEquals("",$item->getDescricao());
        $this->assertEquals(0,$item->getValor());
    }
    public function testeGeteSetDescricao()
    {
        $descricao = "Cadeira";
        $item = new Item();
        $item->setDescricao($descricao);
        $this->assertEquals($descricao,$item->getDescricao());
    }
    
    public function testItemValido()
    {
        $item = new Item();
        $item->setValor(55);
        $item->setDescricao("Cadeira");
        // retorna True se os itens forem válidos
        $this->assertEquals(true,$item->itemValido());
        
        // retorna False se os itens for inválidos
        $item->setValor(55);
        $item->setDescricao("");
        $this->assertEquals(false,$item->itemValido());

        //

        $item->setValor(0);
        $item->setDescricao("");
        $this->assertEquals(false,$item->itemValido());

    }
    /**
     * @dataProvider dataValores
     */
    public function testeGeteSetValor()
    {
        $valor = 30.60;
        $item = new Item();
        $item->setValor($valor);
        $this->assertEquals($valor,$item->getValor());
    }

    public function dataValores()
    {
        return [
            [100],
            [-2],
            [0],
            [2]
        ]; 
    }
}