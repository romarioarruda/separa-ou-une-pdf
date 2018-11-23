<?php

if(!isset($argv[1])){
	exit("\n\n\nphp unir.php novo_arquivo.pdf \n\n");
}

$novo = $argv[1];


$unir = "pdftk *.pdf output ".$novo;

`$unir`;

echo "Salvando => ".$novo."\n";