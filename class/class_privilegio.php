<?php

	class Privilegio{

		private $codigoPrivilegio;
		private $nombrePrivilegio;

		public function __construct($codigoPrivilegio, $nombrePrivilegio){
			$this->codigoPrivilegio = $codigoPrivilegio;
			$this->nombrePrivilegio = $nombrePrivilegio;
		}


		public function getCodigoPrivilegio(){
			return $this->codigoPrivilegio;
		}
		public function setCodigoPrivilegio($codigoPrivilegio){
			$this->codigoPrivilegio = $codigoPrivilegio;
		}
		public function getNombrePrivilegio(){
			return $this->nombrePrivilegio;
		}
		public function setNombrePrivilegio($nombrePrivilegio){
			$this->nombrePrivilegio = $nombrePrivilegio;
		}


		public function toString(){
			return $this->codigoPrivilegio." ".$this->nombrePrivilegio;
		}
	}

?>