<?php 
	require_once 'src/aula5.php';

	$a5 = new Aula5();

	echo "\nBem vindo ao CHECK-HEADERS!\n\n";

	$a5->adicionar('url', 'Digite o link do site');
	echo "\n";
	if ($a5->url != '') {
		foreach (get_headers($a5->url) as $h) {
			echo "$h\n";
		}
	}
?>