<?php

namespace src\poligonos;
class Quadrado 
{
    public function setLargura($largura): void
    {
        $this->largura = $largura;
        $this->altura = $largura;
    }
    public function setAltura($altura): void
    {
        $this->largura = $altura;
        $this->altura = $altura;
    }
    public function getLargura(): float
    {
        return $this->largura;
    }
    public function getAltura(): float 
    {
        return $this->altura;
    }

}