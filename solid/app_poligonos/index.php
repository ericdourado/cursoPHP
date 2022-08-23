<?php


use src\poligonos\Retangulo;
use src\Poligonos;
use src\poligonos\Quadrado;

require __DIR__."/vendor/autoload.php";

$poligono = new Poligonos();
$poligono->setForma(new Retangulo()); //RETANGULO
$poligono->getForma()->setAltura(10);
$poligono->getForma()->setLargura(10);
echo "<h3> Area do Retangulo: ". $poligono->getArea()."</h3>";

// ---------------------------------------
$poligono2 = new Poligonos();
$poligono2->setForma(new Quadrado()); //RETANGULO
$poligono2->getForma()->setAltura(5);
echo "<h3> Area do Quadrado é: ". $poligono2->getArea()."</h3>";


