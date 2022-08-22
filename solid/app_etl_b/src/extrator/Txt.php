<?php

namespace CodeDev46\AppEtl\extrator;

use CodeDev46\AppEtl\extrator\Arquivo;

class Txt extends Arquivo{
    public function lerArquivo(string $caminho): array
    {
        $handle = fopen($caminho, "r");
        while (!feof($handle)) {
            $linha = fgets($handle);
            $this->setDados(
                substr($linha, 11, 30), // NOME
                substr($linha, 0, 11), // CPF  
                substr($linha, 41, 50) //EMAIL
            );
        }
        fclose($handle);
        return $this->getDados();
    }

}

?>