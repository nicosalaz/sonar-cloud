<?php

	require_once 'Contacto.php';

	class Agenda
	{
		private $arreglo;
		private $cont;
		
		function __construct()
		{

			$this->arreglo = array();
			$this->cont = new Contacto();
		}

		public function registrarContacto($contact)
		{
			array_push($this->arreglo, $contact);

		}
		public function listarContactos()
		{
			foreach ($this->arreglo as $value) {
				echo "Nombre: ".$value->getNombre()." - Celular: ".$value->getNumero()."<br>";
			}
		}
		public function buscarContacto(String $nom)
		{
			$num =0;

			foreach ($this->arreglo as $valor) {
				if($valor->getNombre() == $nom){
					$num = $valor->getNumero();
				}else{
					$num = -1;
				}
			}
			return $num;
		}
	}

 ?>