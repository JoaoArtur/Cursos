<?php 
	$rotas = [
		'--url' => '-u',
		'--ok'  => '-o'
	];

	foreach ($argv as $chave => $valor) {
		foreach ($rotas as $rota => $alternativa) {
			if ($valor == $rota or $valor == $alternativa) {
				$prox_valor = (isset($argv[$chave+1]) and !strstr('-',$argv[$chave+1])) ? $argv[$chave+1] : 'Nenhum valor definido';
				echo $prox_valor."\n";

			}
		}
	}
?>