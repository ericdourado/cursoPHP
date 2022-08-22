<?php

require __DIR__."/vendor/autoload.php";
use CodeDev46\AppEtl\Leitor;


// ----------------TXT
$leitorTXT = new Leitor();
$leitorTXT->setDiretorio(__DIR__."/arquivos");
$leitorTXT->setArquivo("dados.txt");
$arr_txt = $leitorTXT->lerArquivo();


// ----------------CSV
$leitorCSV = new Leitor();
$leitorCSV->setDiretorio(__DIR__."/arquivos");
$leitorCSV->setArquivo("dados.csv");
$arr_csv = $leitorCSV->lerArquivo();

// ----------------XLSX
$leitorXlsx = new Leitor();
$leitorXlsx->setDiretorio(__DIR__."/arquivos");
$leitorXlsx->setArquivo("dados.xlsx");
$arr_Xlsx = $leitorXlsx->lerArquivo();

// ------------------MERGE TXT E CSV
echo "<pre>";
print_r(array_merge($arr_txt, $arr_csv, $arr_Xlsx));
echo "</pre>";

