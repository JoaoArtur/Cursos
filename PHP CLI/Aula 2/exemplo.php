<?php 
	if (count($argv) > 1 and $argv[1] == '-u') {
		if (isset($argv[2])) {
			echo $argv[2]."\n";
		} else {
			echo "Nenhum url definido\n";
		}
	} else {
		echo "Argumento -u não definido\n";
	}

?>