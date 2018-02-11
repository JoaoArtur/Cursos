<?php 
	require_once 'src/aula5.php';

	$a5 = new Aula5();

	$a5->adicionar('nome','Digite seu nome');
	$a5->adicionar('idade','Digite sua idade');

	if (count(explode(' ',$a5->nome)) > 1) {
		echo "\n\nVocê digitou um nome composto!";
	} else {
		echo "Seu nome não é composto!";
	}


	if ($a5->idade >= 18) {
		echo "\nVocê já pode dirigir!\n";
	} else {
		echo "\nVocê ainda não tem idade para dirigir!\n";
	}
?>