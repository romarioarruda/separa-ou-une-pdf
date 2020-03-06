<?php

if(!isset($argv[1])){
	exit("\n\n\nphp separa.php nome_arquivo.pdf \n\n");
}

$alvo = $argv[1];

exec("pdftk $alvo burst");

echo "Salvando arquivos \n=> \n=> \n=>\n";


