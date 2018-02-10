<?php 
	require_once 'src/aula3.php';
	$a3 = new Aula3();
	$a3->setarClasse("teste");

	$a3->adicionarRota(
		[
			'rotas' => [
				'-u',
				'--url'
			],
			'funcao' => 'url'
		]
	);

	$a3->adicionarRota(
		[
			'rotas' => '--check-headers',
			'funcao' => 'verificar'
		]
	);

	$a3->adicionarRota(
		[
			'rotas' => '-l',
			'funcao' => 'localizacao'
		]
	);


	$a3->executar();
?>