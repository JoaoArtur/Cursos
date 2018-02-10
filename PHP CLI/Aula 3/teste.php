<?php 
	class teste {
		public $url = null;

		public function url($valor='') {
			$this->url = $valor;
		}

		public function verificar($valor='') {
			if ($this->url != null) {
				print_r(get_headers($this->url));
			} else {
				echo "Url vazio\n";
			}
		}

		public function localizacao($valor='') {
			if ($this->url != null) {
				echo get_headers($this->url)[1]."\n";
			} else {
				echo "Url vazio\n";
			}
		}
	}
?>