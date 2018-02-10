<?php 
	class Aula3 {
		private $rotas = [];
		private $classe = null;

		public function setarClasse($nome) {
			if (file_exists($nome.".php")) {
				include $nome.".php";
				$this->classe = new $nome();
			} else {
				echo "Classe não encontrada.\n";
			}
		}

		public function adicionarRota($rota) {
			/*
				$rota = [
					'rotas' => [
						'-u',
						'--url'
					],
					'funcao' => 'url'
				];
			*/

			$this->rotas[] = $rota;
		}

		public function executar() {
			global $argv;
			if (isset($argv) and count($argv) > 1) {
				if (count($this->rotas) > 0) {
					foreach ($argv as $id => $valor) {
						foreach ($this->rotas as $rota) {
							if (is_array($rota['rotas'])) {
								foreach ($rota['rotas'] as $alternativa) {
									if ($valor == $alternativa) {
										$prox_valor = (isset($argv[$id + 1])) ? $argv[$id + 1] : '';

										$funcao = $rota['funcao'];
										$this->classe->$funcao($prox_valor);
									}
								}
							} else {
								if ($valor == $rota['rotas']) {
									$prox_valor = (isset($argv[$id + 1])) ? $argv[$id + 1] : '';

									$funcao = $rota['funcao'];
									$this->classe->$funcao($prox_valor);
								}
							}
						}
					}
				} else {
					echo "Você precisa definir as rotas.\n";
				}
			} else {
				echo "Defina os argumentos\n";
			}

		}
	}
?>