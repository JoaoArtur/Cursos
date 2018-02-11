<?php 
	class Aula5 {
		public function adicionar($obj,$texto) {
			echo "$texto: ";
			$this->$obj = str_replace(["\n","\r"],'',fgets(STDIN));
		}
	}
?>