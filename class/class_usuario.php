<?php

	class Usuario{

		private $codigoUsuario;
		private $codigoPrivilegio;
		private $nombreUsuario;
		private $password;

		public function __construct($codigoUsuario, $codigoPrivilegio, $nombreUsuario, $password){
			$this->codigoUsuario = $codigoUsuario;
			$this->codigoPrivilegio = $codigoPrivilegio;
			$this->nombreUsuario = $nombreUsuario;
			$this->password = $password;
		}

		public function getCodigoUsuario(){
			return $this->codigoUsuario;
		}
		public function setCodigoUsuario($codigoUsuario){
			$this->codigoUsuario = $codigoUsuario;
		}
		public function getCodigoPrivilegio(){
			return $this->codigoPrivilegio;
		}
		public function setCodigoPrivilegio($codigoPrivilegio){
			$this->codigoPrivilegio = $codigoPrivilegio;
		}
		public function getNombreUsuario(){
			return $this->nombreUsuario;
		}
		public function setNombreUsuario($nombreUsuario){
			$this->nombreUsuario = $nombreUsuario;
		}
		public function getPassword(){
			return $this->password;
		}
		public function setPassword($password){
			$this->password = $password;
		}
		public function toString(){
			return $this->codigoUsuario." ".$this->codigoPrivilegio." ".$this->nombreUsuario." ".$this->password;
		}
	}
	
?>