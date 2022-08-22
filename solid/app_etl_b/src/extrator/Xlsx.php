<?php

namespace CodeDev46\AppEtl\extrator;

use CodeDev46\AppEtl\extrator\Arquivo;

class Xlsx extends Arquivo{
    public function lerArquivo(string $caminho): array
    {
        return $this->getDados();
    }
        
    }
?>