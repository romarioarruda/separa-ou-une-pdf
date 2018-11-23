<?php

if(!isset($argv[1])){
	exit("\n\n\nphp separa.php nome_arquivo.pdf \n\n");
}

$alvo = $argv[1];

$extrai = "pdftk ".$alvo." burst";

`$extrai`;

echo "Salvando arquivos \n=> \n=> \n=>\n";


